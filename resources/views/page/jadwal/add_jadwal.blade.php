@extends('master')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"
        type="text/css">
    <style>
        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #4e73df;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
            padding: 18px;
        }

        .card {
            text-align: left !important;
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }



        #msform .action-button {
            width: 100px;
            background: #4e73df;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #4e73df
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #4e73df;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #4e73df;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #4e73df
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 33.33%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f073"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f0d1"
        }


        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #4e73df
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #4e73df
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

    </style>
@endsection


@section('content')
    <div class="container-fluid">


        <h1 class="h3 mb-2 text-gray-800">Tambah Jadwal</h1>
        <p class="mb-4">Pengguna dapat menambah jadwal kapal baru, terdapat 3 tahapan yang harus di inputkan untuk
            menambah jadwal baru.</p>




        <div class="row">

            <div class="col-lg-12">
                <div class="card mt-3 mb-3">
                    <form id="msform">
                        <!-- progressbar -->
                        <div class="row justify-content-md-center">
                            <div class="col-lg-10 align-self-center">
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Jadwal</strong></li>
                                    <li id="personal"><strong>Tiket Penumpang</strong></li>
                                    <li id="payment"><strong>Tiket Kendaraan</strong></li>
                                </ul>
                            </div>
                        </div>

                        <fieldset>
                            <div class="col-lg-12 mb-6">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal Kapal Baru</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Pilih Kapal</label>
                                            <select class="form-control" id="">
                                                <option>
                                                    Pelni
                                                </option>
                                                <option>
                                                    Makasar ⇆ Surabaya
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih KM</label>
                                            <select class="form-control" id="">
                                                <option>
                                                    KM. Dorolongga
                                                </option>
                                                <option>
                                                    KM. Bismarck
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Berangkat</label>
                                            <input type="date" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Tiba</label>
                                            <input type="date" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Berangkat</label>
                                            <input type="time" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Tiba</label>
                                            <input type="time" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="col-lg-12 mb-6">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 my-auto">
                                                <span class="m-0 d-flex    font-weight-bold text-primary">Tambah Tiket
                                                    Penumpang</span>
                                                {{-- <a href="{{ url('detail_tiket') }}" style="float: right!important"
                                                class="btn btn-primary">
                                                <span class="text">
                                                    Detail
                                                </span>
                                            </a> --}}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row mb-5">
                                            <label class="col-sm-12 col-form-label"><strong>Jenis Tiket 1</strong></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="" value=""
                                                    placeholder="Kelas Tiket">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="" value=""
                                                    placeholder="Jumlah Tiket Tiket">
                                            </div>
                                            <label class="col-sm-12 col-form-label mb-6">Harga</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Balita"
                                                        aria-label="Balita" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Dewasa"
                                                        aria-label="Dewasa" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="form-group row mb-5">
                                            <label class="col-sm-12 col-form-label"><strong>Jenis Tiket 2</strong></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="" value=""
                                                    placeholder="Kelas Tiket">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="" value=""
                                                    placeholder="Jumlah Tiket Tiket">
                                            </div>
                                            <label class="col-sm-12 col-form-label mb-6">Harga</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Balita"
                                                        aria-label="Balita" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Dewasa"
                                                        aria-label="Dewasa" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="col-lg-12 mb-6">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambah Tiket Kendaraan</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row mb-5">
                                            <label class="col-sm-12 col-form-label"><strong>Jenis Tiket Kendaraan
                                                    1</strong></label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="">
                                                    <option hidden>Pilih Jenis Kendaraan</option>
                                                    <option>Sepeda Motor</option>
                                                    <option> Mobil</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="" value=""
                                                    placeholder="Jumlah Tiket">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Harga"
                                                        aria-label="Harga" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="form-group row mb-5">
                                            <label class="col-sm-12 col-form-label"><strong>Jenis Tiket Kendaraan
                                                    2</strong></label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="">
                                                    <option hidden>Pilih Jenis Kendaraan</option>
                                                    <option>Sepeda Motor</option>
                                                    <option> Mobil</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="" value=""
                                                    placeholder="Jumlah Tiket">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Harga"
                                                        aria-label="Harga" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="sidebar-divider">

                                    </div>
                                </div>
                            </div>
                            <input type="button" class="submit action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>

                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.3/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {



            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin ingin menambah data ?',
                    text: "Silahkan Cek Kembali data yang diinputkan, apakah sudah lengkap atau belum !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sudah lengkap!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Sukses !',
                            'Berhasil Tambah Jadwal Baru.',
                            'success'
                        )
                    }
                })
            })

        });
    </script>
@endsection
