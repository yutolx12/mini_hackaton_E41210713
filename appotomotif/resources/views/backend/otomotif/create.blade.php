{{-- Code di bawah digunakan untuk membuat tampilan tambah data --}}
@extends('backend/layouts.template')

@section('content')
    <main id="main" class="main">
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="icon_document_alt"></i>Data Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><i class="fa fa-home"></i><a href="{{ url('dashboard') }}"></a></li>
                            <li class="breadcrumb-item"><i class="icon_document_alt"></i>Data Karyawan</li>
                            <li class="breadcrumb-item"><i class="fa fa-files-o"></i>Otomotif</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Data Karyawan
                            </header>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There we some problems with your input. <br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="panel-body">
                                <div class="form">
                                    <form class="form-validate form-horizontal" id="pengalaman_kerjan_form" method="POST"
                                        action="{{ isset($otomotif) ? route('otomotif.update', $otomotif->id) : route('otomotif.store') }}">
                                        @csrf
                                        {!! isset($otomotif) ? method_field('PUT') : '' !!}
                                        <input type="hidden" name="id"
                                            value="{{ isset($otomotif) ? $otomotif->id : '' }}">

                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2"> Nama Karyawan
                                                <span>*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="nama" name="nama" minlength="5"
                                                    type="text" value="{{ isset($otomotif) ? $otomotif->nama : '' }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2"> Tingkatan <span
                                                    class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <select name="tingkatan" id="tingkatan" class="form-control">
                                                    <option value="1"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 1 ? 'selected' : '' }}>
                                                        Manager</option>
                                                    <option value="2"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 2 ? 'selected' : '' }}>
                                                        Sekretaris</option>
                                                    <option value="3"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 3 ? 'selected' : '' }}>
                                                        Bendahara</option>
                                                    <option value="4"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 4 ? 'selected' : '' }}>
                                                        Marketing</option>
                                                    <option value="5"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 5 ? 'selected' : '' }}>
                                                        Montir</option>
                                                    <option value="6"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 6 ? 'selected' : '' }}>
                                                        Asisten Montir</option>
                                                    <option value="7"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 7 ? 'selected' : '' }}>
                                                        OB</option>
                                                    <option value="8"
                                                        {{ isset($otomotif) && $otomotif->tingkatan == 8 ? 'selected' : '' }}>
                                                        Security</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2"> Telepon
                                                <span>*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="telepon" name="telepon" minlength="5"
                                                    type="text" value="{{ isset($telepon) ? $telepon->telepon : '' }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cname" class="control-label col-lg-2"> Alamat
                                                <span>*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="alamat" name="alamat" minlength="5"
                                                    type="text" value="{{ isset($alamat) ? $alamat->alamat : '' }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <a href="{{ route('otomotif.index') }}"><button class="btn btn-default"
                                                        type="button">Cancel</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </section>
    </main>
@endsection

@push('content-css')
    <link rel="stylesheet" href="{{ asset('backend/asset/css/bootstrap-datepicker.css') }}">
@endpush

@push('content-js')
    <script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript">
        $('#tahun_masuk').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
        $('#tahun_keluar').datepicker({
            format: "yyyy"
            viewMode: "years",
            minViewMode: "years"
        })
    </script>
@endpush
