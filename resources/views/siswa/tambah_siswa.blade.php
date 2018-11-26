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
        <input type="number" class="form-control" name="nis" id="nis" data-toggle="tooltip" data-placement="bottom" title="Nomor Induk Siswa" value="{{ old('nis') }}">
        <?php if ($errors->has('nis')); ?>
        <p class="font-weight-bold text-danger small">{{ $errors->first('nis') }}</p>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" data-toggle="tooltip" data-placement="bottom" title="Nama Lengkap Siswa" value="{{ old('nama') }}">

        <?php if ($errors->has('nama')); ?>
        <p class="font-weight-bold text-danger small">{{ $errors->first('nama') }}</p>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label>Lahir di</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" data-toggle="tooltip" data-placement="bottom" title="Kota Asal Siswa" value="{{ old('tempat_lahir') }}">
        </div>

        <div class="form-group col-md-6">
        <label>Tanggal lahir</label>
        <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" data-toggle="tooltip" data-placement="bottom" title="Tanggal Lahir Siswa" value="{{ old('tgl_lahir') }}">
        </div>

        <?php if ($errors->has('tempat_lahir') || $errors->has('tgl_lahir')); ?>
        <p class="font-weight-bold text-danger small">
        {{ $errors->first('tgl_lahir') }}</p>
    </div>
    
    <div class="form-group">
        <label>Jenis kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" data-toggle="tooltip" data-placement="bottom" title="Jenis Kelamin" value="{{ old('jenis_lekamin') }}">
        <option value="">-- Piih --</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
        </select>

        <?php if ($errors->has('jenis_kelamin')); ?>
        <p class="font-weight-bold text-danger small">
        {{ $errors->first('jenis_kelamin') }}</p>
    </div>

    <div class="form-group">
        <label>Agama</label>
        <select class="form-control" name="agama" id="agama" data-toggle="tooltip" data-placement="bottom" title="Agama" value="{{ old('agama') }}">
        <option value="">-- Pilih --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katholik">Katholik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        </select>

        <?php if ($errors->has('agama')); ?>
        <p class="font-weight-bold text-danger small">
        {{ $errors->first('agama') }}</p>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" data-toggle="tooltip" data-placement="bottom" title="Alamat Siswa Sekarang">{{ old('alamat') }}</textarea>

            <?php if ($errors->has('alamat')); ?>
            <p class="font-weight-bold text-danger small">
            {{ $errors->first('alamat') }}</p>
    </div>

    <div class="form-group">
        <label>no. HP</label>
        <input type="number" class="form-control" name="hp" id="hp" data-toggle="tooltip" data-placement="bottom" title="Nomor Telepon" value="{{ old('hp') }}">

        <?php if ($errors->has('hp')); ?>
        <p class="font-weight-bold text-danger small">
        {{ $errors->first('hp') }}</p>
    </div>

    <input type="submit" class="float-right btn btn-primary btn-sm" value="Submit" readonly>
    </form>
</div>
@endsection