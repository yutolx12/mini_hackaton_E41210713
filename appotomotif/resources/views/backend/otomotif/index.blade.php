{{-- Code di bawah digunakan untuk membuat tampilan index aplikasi --}}
@extends('backend/layouts.template');

@section('content')
    <main id="main" class="main">
        <section id="main-content">
            <div class="wrapper">
                <div class="row">
                    <h3 class="page-header"><i class="icon_document_alt"></i>Data Karyawan</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><i class="icon_document_alt"></i><a href="">Data Karyawan</a>
                        </li>
                        <li class="breadcrumb-item"><i class="fa fa-files-o"></i><a href="">Otomotif</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Otomotif
                        </header>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <a href="{{ route('otomotif.create') }}">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-plus"> Tambah </i>
                                </button>
                            </a>
                            <br><br>
                            <table class="table table-striped table-advance table-hover">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tingkatan</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th> Action </th>
                                    </tr>
                                    @foreach ($otomotif as $item)
                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                @if ($item->tingkatan == 1)
                                                    Manager
                                                @elseif ($item->tingkatan == 2)
                                                    Sekretaris
                                                @elseif ($item->tingkatan == 3)
                                                    Bendahara
                                                @elseif ($item->tingkatan == 4)
                                                    Marketing
                                                @elseif ($item->tingkatan == 5)
                                                    Montir
                                                @elseif ($item->tingkatan == 6)
                                                    Asisten Montir
                                                @elseif ($item->tingkatan == 7)
                                                    OB
                                                @elseif ($item->tingkatan == 8)
                                                    Security
                                                @endif

                                            </td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <form action="{{ route('otomotif.destroy', $item->id) }}" method="POST">
                                                    <div class="btn-group">
                                                        <a class="btn btn-warning"
                                                            href="{{ route('otomotif.edit', $item->id) }}"><i
                                                                class="bi bi-pencil-square"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"><i
                                                                class="bi bi-trash"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
@endsection
