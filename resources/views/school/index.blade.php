
@extends('layouts.main')

@section('title','School')

@section('h1','API Sekolah')
@section('p','Menyediakan data sekolah yang ada di Indonesia. Dari Sabang Sampai Merauke Berjajar Pulau-pulau.')


@section('container')
<a class="btn btn-warning" href="/api/school/download">Get API</a>

<a class="btn btn-success" href="{{ url('api/school/create')}}">Tambah Data</a>




<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h1>All School</h1>
        </div>
    </div>
    
    <div class="row" id="daftar-sekolah">
        @foreach($school as $sc)
        <div class="col-md-4">
        <div class="card mb-3" >
            <div class="card-body">
                <h5 class="card-title">{{$sc->nama_sekolah }}</h5>
                <p class="card-text">Alamat : {{$sc->alamat }}</p>
                <p class="card-text">telp : {{$sc->tlp }}</p>
                <p class="card-text">Kategori : {{$sc->kategori }}</p>
                <a href="/api/school/{{$sc->id}}" class="btn btn-primary">Detail</a>
                <!-- <a href="#" class="btn btn-success">Daftar</a> -->
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

@endsection