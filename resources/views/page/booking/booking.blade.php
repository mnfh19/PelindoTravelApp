@extends('master')

@section('css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('js')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row align-items-end">
            <div class="col-lg-10">
                <h1 class="h3 mb-2 text-gray-800">Data Pemesanan</h1>
            </div>
            {{-- <div class="col-lg-2">
                <a href="{{ url('add_kapal') }}" class="btn btn-primary btn-icon-split float-right">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Baru</span>
                </a>
            </div> --}}

        </div>
        <div class="my-2"></div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Kapal</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Tiket</th>
                                <th>Nomor Booking</th>
                                <th>Nama Pemesan</th>
                                <th>Tgl Booking</th>
                                <th>Jumlah Penumpang</th>
                                <th>Harga Total</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status Booking</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>ID Tiket</th>
                                <th>Nomor Booking</th>
                                <th>Nama Pemesan</th>
                                <th>Tgl Booking</th>
                                <th>Jumlah Penumpang</th>
                                <th>Harga Total</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status Booking</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#" class="btn btn-primary" data-toggle="modal"
                                        data-target="#DetailModal">675832</a></td>
                                <td>92384592341</td>
                                <td>Iskandar</td>
                                <td>4 Agustus 2022, 13:29
                                </td>
                                <td>2 Dewasa <br>1 Balita</td>
                                <td>Rp 120.000</td>
                                <td><a href="#" data-toggle="modal" data-target="#BuktiModal" class="btn btn-primary">
                                        <span class="text">Lihat</span>
                                    </a>
                                </td>
                                <td><span class="text-warning">Belum Dibayar</span></td>
                                <td>
                                    <a href="#" class="btn btn-success">
                                        <span class="icon text-white">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <span class="icon text-white">
                                            <i class="fas fa-times"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="#" class="btn btn-primary" data-toggle="modal"
                                        data-target="#DetailModal">4562730</a></td>
                                <td>82637483</td>
                                <td>Bediviere</td>
                                <td>1 Januari 2022, 08:09
                                </td>
                                <td>1 Dewasa</td>
                                <td>Rp 40.000</td>
                                <td><a href="#" data-toggle="modal" data-target="#BuktiModal" class="btn btn-primary">
                                        <span class="text">Lihat</span>
                                    </a>
                                </td>
                                <td><span class="text-success">Terbayar</span></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#CetakModal" class="btn btn-primary">
                                        <span class="icon text-white">
                                            <i class="fas fa-print"></i>
                                        </span>
                                    </a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Tiket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Detail Perjalanan</h5>
                    <table class="table ">

                        <tbody>
                            <tr>
                                <th>Nama Kapal</th>
                                <td colspan="3">Dharma Lautan Utama <br>KM. Dharma Kencana 7</td>
                            </tr>
                            <tr>
                                <th>Tanggal Berangkat</th>
                                <td>4 Januari 2022<br>07.00</td>
                                <th>Tanggal Berangkat</th>
                                <td>4 Januari 2022<br>07.00</td>
                            </tr>
                            <tr>
                                <th>Lama Perjalanan</th>
                                <td colspan="3">2 Hari 3 Jam</td>
                            </tr>
                            <tr>
                                <th>Rute</th>
                                <td colspan="3">Surabaya
                                    <span class="icon text-grey">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                    Makasar
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <h5 class="mt-5">Detail Penumpang</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Balita</th>
                                <td>Arturia Pendragon</td>
                            </tr>
                            <tr>
                                <th>Dewasa</th>
                                <td>Siti Nur <br> Freddy Jhonson</td>
                            </tr>
                            <tr>
                                <th>Kendaraan</th>
                                <td>Sepeda Motor</td>
                            </tr>

                        </tbody>
                    </table>
                    <h5 class="mt-5">Detail Harga</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Kelas Tiket </th>
                                <td colspan="3">VIP</td>
                            </tr>
                            <tr>
                                <th colspan="4">Harga Tiket Penumpang</th>

                            </tr>
                            <tr>
                                <td>Balita </td>
                                <td>1 x Rp 20.000 = </td>
                                <th class="text-right">Rp 20.000</th>
                            </tr>
                            <tr>
                                <td>Dewasa </td>
                                <td>2 x Rp 50.000 = </td>
                                <th class="text-right">Rp 100.000</th>
                            </tr>

                            <tr>
                                <th colspan="4">Harga Tiket Kendaraan</th>

                            </tr>
                            <tr>
                                <td>Sepeda Motor </td>
                                <td>1 x Rp 20.000 = </td>
                                <th class="text-right">Rp 20.000</th>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th>Total Harga </th>
                                <th class="text-right" colspan="3">Rp 140.000</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="BuktiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://cf.shopee.co.id/file/9cdee7272495a769e52ea9443488f1a0" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="CetakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cetak Tiket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Penumpang</th>
                                <th>Cetak Tiket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bedievere</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-print"></i>
                                        </span>
                                        <span class="text">Cetak</span>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
