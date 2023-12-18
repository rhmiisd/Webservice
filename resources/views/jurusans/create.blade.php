@extends('layouts.app2')
@section('content')
    <h1 class="mb-0">Tambah Jurusan</h1>
    <hr />
    <form action="{{ route('jurusans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="nmjurusan" class="form-control" placeholder="jurusan">
            </div>
        </div>
            
            <div class="row mb-3 ">
                <div class="col-md-8 col-lg-9">
                    <select class="js-example-basic-single" name="idsekolah">
                        <option value="" selected disabled>Pilih Sekolah</option>
                    @foreach($sekolah as $data)
                        <option value="{{ $data->id }}">{{ $data->namasekolah }}</option>
                    @endforeach
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-8 col-lg-9">
                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                </div>
            </div>

            <div class="row mb-3">
                <div class="ol-md-8 col-lg-9">
                    <input type="text" name="prospek" class="form-control" placeholder="Prospek kerja">
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-8 col-lg-9">
                    <input type="text" name="tersedia" class="form-control" placeholder="Sekolah tersedia">
                </div>
            </div>
 
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection