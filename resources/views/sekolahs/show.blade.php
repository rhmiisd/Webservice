@extends('layouts.app2')
@section('title', 'Jurusan')
@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Show Sekolah</h2>
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
                    <form action="{{ route('sekolahs.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <!-- Add or update fields as needed -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Nama Sekolah</label>
                                    <input type="text" name="namasekolah" value="{{ $data->namasekolah }}" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Nama Kepala Sekolah</label>
                                    <input type="text" name="kepsek" value="{{ $data->kepsek }}" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Akreditas</label>
                                    <input type="text" name="akre" value="{{ $data->akre }}" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">NPSN</label>
                                    <input type="number" name="npsn" value="{{ $data->npsn }}" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Visi</strong>
                                    <textarea type="text" name="visi" class="form-control" rows="6" disabled>{{ $data->visi }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Misi</strong>
                                    <textarea type="text" name="misi" class="form-control" rows="6" disabled>{{ $data->misi }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Ekskul</label>
                                    <input type="text" name="ekskul" value="{{ $data->ekskul }}" class="form-control" disabled>
                                </div>
                            </div>

                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">No HP</label>
                                    <input type="text" name="nohp" value="{{ $data->nohp }}" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Lokasi</label>
                                    <input type="text" name="lokasi" value="{{ $data->lokasi }}" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Tahun berdiri</label>
                                    <input type="text" name="berdiri" value="{{ $data->berdiri }}" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Logo Sekolah</label>
                                    <br>
                                    <img src="{{ Storage::url('/'. $data->logo) }}" alt="" width="100px">
                                </div>
                            </div>
                            <!-- Add or update fields as needed -->

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary" href="{{ route('sekolahs.index') }}"> Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
