@extends('layouts.app2')
@section('content')
    <h1 class="mb-0">Data Sekolah</h1>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <hr />
    <form action="{{ route('sekolahs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
            <input type="text" name="namasekolah" class="form-control"  value="{{old('namasekolah')}}" placeholder="Nama Sekolah">
            </div>
        </div>
</select>
        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="kepsek"  value="{{old('kepsek')}}" class="form-control" placeholder="Kepala Sekolah">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="akre"  value="{{old('akre')}}" class="form-control" placeholder="Akreditas">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="npsn"  value="{{old('npsn')}}" class="form-control" placeholder="NPSN">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="visi"   value="{{old('visi')}}" class="form-control" placeholder="Visi">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="misi"  value="{{old('misi')}}" class="form-control" placeholder="Misi">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="ekskul" class="form-control" placeholder="Ekskul">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="nohp" class="form-control" placeholder="No HP">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="date" name="berdiri" class="form-control" placeholder="Tahun berdiri">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <input type="file" name="logo" class="form-control" placeholder="Logo">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8 col-lg-9">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection