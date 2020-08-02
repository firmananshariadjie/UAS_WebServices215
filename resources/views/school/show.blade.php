@extends('layouts.main')

@section('title','Detail School')


@section('container')

<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h1>School</h1>
        </div>
    </div>

    <div class="row" id="daftar-sekolah">           
        <div class="col-md-4">
        <div class="card mb-3" >
            <div class="card-body">
                <h5 class="card-title">Nama Sekolah :{{$school->nama_sekolah }}</h5>
                <p class="card-text">Alamat :{{$school->alamat }}</p>
                <p class="card-text">telp :{{$school->tlp }}</p>
                <p class="card-text">Website :{{$school->website }}</p>
                <p class="card-text">Email :{{$school->email }}</p>
                <p class="card-text">Kategori :{{$school->kategori }}</p>
                <p class="card-text">Visi :{{$school->visi }}</p>
                <p class="card-text">Misi :{{$school->misi }}</p>

                <a href="{{$school->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="{{$school->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" href="" class="btn btn-danger">Delete</button>    
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection