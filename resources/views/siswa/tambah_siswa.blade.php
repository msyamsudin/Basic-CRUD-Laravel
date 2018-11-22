@extends('layout')

@section('judul')
Tambah Siswa
@endsection

@section('konten')
<br>
<div class="container justify-content-center col-5">
    <form action="{{ url('siswa') }}" method="post">
        {{ csrf_field() }}
    <div class="form-group">
        <label>NIS</label>
        <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan nis">
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label>Lahir di</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Jakarta">
        </div>
        <div class="form-group col-md-6">
        <label>Tanggal lahir</label>
        <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" placeholder="25/06/1994">
        </div>
    </div>
    
    <div class="form-group">
        <label>Jenis kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Agama</label>
        <select class="form-control" name="agama" id="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katholik">Katholik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        </select>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>no. HP</label>
        <input type="text" class="form-control" name="hp" id="hp" placeholder="Masukkan nomor hp">
    </div>

    <input type="submit" class="float-right btn btn-primary btn-sm" value="Submit" readonly>
    </form>
</div>
@endsection