@extends('layouts.app2')
@section('title', 'Jurusan')
@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Show Jurusan</h2>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mb-4">
                <div class="col-lg-12 mt-4">
                    <form action="{{ route('jurusans.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <!-- Add or update fields as needed -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Nama Jurusan</label>
                                    <input type="text" name="nmjurusan" value="{{ $data->nmjurusan }}" class="form-control" disabled>
                                </div>
                            </div>
                       
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">ID Sekolah</label>
                                    <input type="number" name="idsekolah" value="{{ $data->idsekolah }}" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Deskripsi</strong>
                                    <textarea type="text" name="deskripsi" class="form-control" rows="6" disabled>{{ $data->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Prospek</strong>
                                    <textarea type="text" name="prospek" class="form-control" placeholder="Prospek" rows="6" disabled>{{ $data->prospek }}</textarea>
                                </div>
                            </div>
                            <!-- Add or update fields as needed -->

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary" href="{{ route('jurusans.index') }}"> Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
