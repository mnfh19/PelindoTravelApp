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
                <h1 class="h3 mb-2 text-gray-800">Detail Tiket</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum nibh sit amet
                    diam fermentum fermentum. Nullam eu sapien dapibus magna dapibus ultricies. Pellentesque facilisis nibh
                    et ipsum vehicula convallis. Nunc non ex non ipsum tristique fermentum aliquet sed risus. Nullam vel
                    dolor ac orci mattis pellentesque. Quisque magna sem, pharetra placerat sagittis sit amet, aliquet id
                    nisi. Curabitur nec diam ut massa auctor maximus nec non sem.</p>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('add_rute') }}" class="btn btn-primary btn-icon-split float-right">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Baru</span>
                </a>
            </div>

        </div>
        <div class="my-2"></div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tiket Penumpang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kelas Tiket</th>
                                <th>Total Tiket</th>
                                <th>Jumlah Tiket Tersisa</th>
                                <th>Harga Tiket Balita</th>
                                <th>Harga Tiket Dewasa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Kelas Tiket</th>
                                <th>Total Tiket</th>
                                <th>Jumlah Tiket Tersisa</th>
                                <th>Harga Tiket Balita</th>
                                <th>Harga Tiket Dewasa</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>VIP</td>
                                <td>100</td>
                                <td>30</td>
                                <td>Rp 10.000</td>
                                <td>Rp 30.000</td>


                                <td>
                                    <a href="#" class="btn btn-info">
                                        <span class="icon text-white">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <span class="icon text-white">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('add_rute') }}" class="btn btn-primary btn-icon-split float-right">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Baru</span>
                </a>
            </div>

        </div>
        <div class="my-2"></div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tiket Kendaraan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kendaraan</th>
                                <th>Total Tiket</th>
                                <th>Jumlah Tiket Tersisa</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kendaraan</th>
                                <th>Total Tiket</th>
                                <th>Jumlah Tiket Tersisa</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sepeda Motor</td>
                                <td>10</td>
                                <td>4</td>
                                <td>Rp 50.000</td>


                                <td>
                                    <a href="#" class="btn btn-info">
                                        <span class="icon text-white">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <span class="icon text-white">
                                            <i class="fas fa-trash"></i>
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

@endsection
