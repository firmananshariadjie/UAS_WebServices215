@extends('layouts.main')

@section('title','Create School')

@section('h1','API Sekolah')
@section('p','Menyediakan data sekolah yang ada di Indonesia. Dari Sabang Sampai Merauke Berjajar Pulau-pulau.')


@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h1>Tambah Data Sekolah</h1>

            <form method="post" action="/api/school/store" enctype="multipart/form-data">
            @csrf 
                <div class="form-group">
                    <label for="exampleFormControlSelect1">User ID</label>
                    <select class="form-control" id="user_id" name="user_id">
                    @foreach ($school as $id => $name)
                        <option value="{{ $id }}">{{$id}}-{{ $name }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Masukan Nama Sekolah">
                </div>
                <div class="form-group">
                    <label for="kategori">Pilih Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MAN">MAN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Sekolah</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Sekolah">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Website">
                </div>
                <div class="form-group">
                    <label for="tlp">Telepon</label>
                    <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan Alamat Telepon Sekolah">
                </div>
                <div class="form-group">
                    <label for="email">Email Sekolah</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Sekolah">
                </div>
                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea class="form-control" id="visi" rows="3" name="visi"></textarea>
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea class="form-control" id="misi" rows="3" name="misi"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>    
            </form>
        </div>
    </div>
</div>


@endsection