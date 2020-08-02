@extends('layouts.main')

@section('title','Edit School')


@section('container')

<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h1>Ubah Data Sekolah</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif  
            <form method="post" action="/api/school/{{$school->id}}" enctype="multipart/form-data">
            @method('put')         
            @csrf       
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Masukan Nama Sekolah"value="{{$school->nama_sekolah}}" >
                </div>
                <div class="form-group">
                    <label for="kategori">Pilih Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori"value="{{$school->kategori}}" >
                </div>                
                <div class="form-group">
                    <label for="alamat">Alamat Sekolah</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Sekolah" value="{{$school->alamat}}">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Website" value="{{$school->website}}">
                </div>
                <div class="form-group">
                    <label for="tlp">Telepon</label>
                    <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan Alamat Telepon Sekolah" value="{{$school->tlp}}">
                </div>
                <div class="form-group">
                    <label for="email">Email Sekolah</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Sekolah" value="{{$school->email}}">
                </div>
                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea class="form-control" id="visi" rows="3" name="visi">{{$school->visi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea class="form-control" id="misi" rows="3" name="misi">{{$school->misi}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>    
            </form>
        </div>
    </div>
</div>

@endsection