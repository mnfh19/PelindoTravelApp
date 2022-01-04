@extends('master')


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kapal</h1>
        </div>


        <div class="row">

            <div class="col-lg-12">



                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label>KM</label>
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Nama Pemilik</label>
                                <input type="text" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Rute</label>
                                <select class="form-control" id="">
                                    <option>
                                        Surabaya ⇆ Makasar
                                    </option>
                                    <option>
                                        Makasar ⇆ Surabaya
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kapal</label>
                                <select class="form-control" id="">
                                    <option>Penumpang</option>
                                    <option>Barang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Muatan</label>
                                <input type="number" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="">
                                    <option>Aktif</option>
                                    <option>NonAktif</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">

                                <span class="text">Tambah</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
