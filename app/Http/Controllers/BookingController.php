<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingModel;
use App\TiketModel;
use App\TiketKendaraanModel;
use App\PenumpangModel;
use App\JadwalModel;
use App\KapalModel;

use App\UserModel;

class BookingController extends Controller
{
    public function index()
    {
        $data['get'] = BookingModel::select('booking.*', 'user.*')
                                    ->join('user', 'booking.id_user', '=', 'user.id_user')
                                    ->get();
        return view('page/booking/booking', $data);
        // dd($data);
    }

    public function getDetailTiket($id){
        // $data = BookingModel::select('booking.id_booking', 'penumpang.*', 'tiket.*', 'tiket_kendaraan.*', 'kapal.*', 'rute.*', 'jadwal.*')
        //             ->join('tiket', 'booking.id_tiket', '=', 'tiket.id_tiket')
        //             ->join('tiket_kendaraan', 'booking.id_tiket_kendaraan', '=', 'tiket_kendaraan.id_tiket_kendaraan')
        //             ->join('user', 'booking.id_user', '=', 'user.id_user')
        //             ->get();

        $booking = BookingModel::where('id_booking', $id)->first();



        if ($booking->id_tiket != 0) {
            $tiket = TiketModel::where('id_tiket', $booking->id_tiket)->first();
            $jadwal = JadwalModel::where('id_jadwal', $tiket->id_jadwal)->first();
        }

        if ($booking->id_tiket_kendaraan != 0) {
            $tiketKend = TiketKendaraanModel::where('id_tiket_kendaraan', $booking->id_tiket_kendaraan)->first();
            $jadwal = JadwalModel::where('id_jadwal', $tiketKend->id_jadwal)->first();
        }


        $kapal = KapalModel::select('kapal.*', 'rute.*')
                                ->join('rute', 'kapal.id_rute', '=', 'rute.id_rute')
                                ->where('id_kapal', $jadwal->id_kapal)
                                ->first();

        $penumpang = PenumpangModel::where('id_booking', $id)->get();

        $balita = [];
        $dewasa = [];

        $bal= 0;
        $dew= 0;
        foreach ($penumpang as $d) {
            if ($d->jenis_penumpang == 1) {

                $dewasa[$dew++] = $d->nama_penumpang;
            }

            if ($d->jenis_penumpang == 0) {

                $balita[$bal++] = $d->nama_penumpang;
            }
        }



        $data = [
            "nama_kapal" => $kapal->nama_kapal,
            "km" => $kapal->km,
            "tgl_berangkat" => \Carbon\Carbon::parse($jadwal->tgl_berangkat)->translatedFormat('j F Y'),
            "tgl_tiba" => \Carbon\Carbon::parse($jadwal->tgl_tiba)->translatedFormat('j F Y'),
            "jam_berangkat" => \Carbon\Carbon::parse($jadwal->jam_berangkat)->translatedFormat('H:i')." WIB",
            "jam_tiba" => \Carbon\Carbon::parse($jadwal->jam_tiba)->translatedFormat('H:i')." WIB",
            "lama_perjalanan" => $jadwal->lama_perjalanan,
            "rute" => $kapal->rute_awal." ⇆ ".$kapal->rute_akhir,
            "kendaraan" => $booking->id_tiket_kendaraan != 0 ? $tiketKend->jenis_kendaraan : "",
            "kelas_tiket" => $booking->id_tiket != 0 ? $tiket->kelas_tiket : "",
            "harga_balita" => $booking->id_tiket != 0 ? $tiket->harga_balita : 0,
            "harga_dewasa" => $booking->id_tiket != 0 ? $tiket->harga_dewasa : 0,
            "penumpang_dewasa" => $booking->penumpang_dewasa,
            "penumpang_balita" => $booking->penumpang_balita,
            "harga_kendaraan" => $booking->id_tiket_kendaraan != 0 ? $tiketKend->harga : 0,
            "total_balita" => $booking->id_tiket != 0 ? $tiket->harga_balita*$booking->penumpang_balita : 0,
            "total_dewasa" => $booking->id_tiket != 0 ? $tiket->harga_dewasa*$booking->penumpang_dewasa : 0,
            "harga_total" => $booking->harga_total,
        ];

        // echo json_encode($dewasa);
        // echo response()->json([ 'dewasa' => $dewasa, 'balita' => $dew  ]);
        echo json_encode(array("main" => $data, "list_dewasa" => $dewasa, "list_balita" => $balita));
    }

    public function cetakTiket($id){
        $get = PenumpangModel::where('id_booking', $id)->get();
        echo json_encode($get);
    }
}
