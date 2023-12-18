@extends('layouts.app2')
@section('title', 'Sekolah')
@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-lg-12">

            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Data Sekolah</h2>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <h6>{{ $message }}</h6>
                </div>
            @endif

            <div class="mb-4 col-lx-12">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="btn btn-success" href="{{ route('sekolahs.create') }}">
                    <i class="fas fa-plus"></i> Tambah Sekolah
                </a>
            </div>

                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush w-100" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th width="30px">No</th>
                                <th>Nama Sekolah</th>
                                <th>Kepala Sekolah</th>
                                <th>Akreditas</th>
                                <th>NPSN</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Ekskul</th>
                                <th>No HP</th>
                                <th>Lokasi</th>
                                <th>Tahun berdiri</th>
                                <th>Logo</th>
                                <th width="230px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data)
                                @foreach ($data as $sekolah)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sekolah->namasekolah }}</td>
                                        <td>{{ $sekolah->kepsek }}</td>
                                        <td>{{ $sekolah->akre }}</td>
                                        <td>{{ $sekolah->npsn }}</td>
                                        <td>{{ $sekolah->visi }}</td>
                                        <td>{{ $sekolah->misi }}</td>
                                        <td>{{ $sekolah->ekskul }}</td>
                                        <td>{{ $sekolah->nohp }}</td>
                                        <td>{{ $sekolah->lokasi }}</td>
                                        <td>{{ $sekolah->berdiri }}</td>
                                        <td> <img src="{{ Storage::url('/'. $sekolah->logo) }}" alt="" width="100px"></td>
                                        <td>
                                            <form action="{{ route('sekolahs.destroy', $sekolah->id) }}" method="POST">
                                                <a class="btn btn-success"
                                                    href="{{ route('sekolahs.show', $sekolah->id) }}" style="margin-left: 5px;">Show</a>
                                           
                                                <a class="btn btn-primary"
                                                    href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                                            
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p>
                                    No Sekolah data available
                                </p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
