@extends('layouts.app2')
@section('title', 'Jurusan')
@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-lg-12">

            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Data Jurusan</h2>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <h6>{{ $message }}</h6>
                </div>
            @endif

            <div class="mb-4 col-lx-12">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="btn btn-success" href="{{ route('jurusans.create') }}">
                    <i class="fas fa-plus"></i> Tambah Jurusan
                </a>
            </div>

                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush w-100" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th width="30px">No</th>
                                <th>Nama Jurusan</th>
                                <th>ID Sekolah</th>
                                <th>Deskripsi</th>
                                <th>Prospek</th>
                                <th>Tersedia</th>
                                <th width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($jurusans)
                                @foreach ($jurusans as $jurusan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jurusan->nmjurusan }}</td>
                                        <td>{{ $jurusan->idsekolah }}</td>
                                        <td>{{ $jurusan->deskripsi }}</td>
                                        <td>{{ $jurusan->prospek }}</td>
                                        <td>{{ $jurusan->tersedia }}</td>
                                        <td>
                                            <form action="{{ route('jurusans.destroy', $jurusan->id) }}" method="POST">
                                                <a class="btn btn-success"
                                                    href="{{ route('jurusans.show', $jurusan->id) }}" style="margin-left: 5px;">Show</a>
                                           
                                                <a class="btn btn-primary"
                                                    href="{{ route('jurusans.edit', $jurusan->id) }}">Edit</a>
                                            
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p>
                                    No jurusan data available
                                </p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
