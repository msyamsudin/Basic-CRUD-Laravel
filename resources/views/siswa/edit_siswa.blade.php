@extends('layout')

@section('judul')
Edit Data Siswa
@endsection

@section('konten')
<br>
<div class="container justify-content-center col-5">
    <form action="{{ url('siswa/'.$data->id) }}" method="post">
    <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
    <div class="form-group">
        <label>NIS</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $data->nis }}">
        <p class="font-weight-bold text-danger small validasi-nis"></p>
        <?php if ($errors->has('nis')); ?>
        <p class="font-weight-bold text-danger small">{{ $errors->first('nis') }}</p>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
        <label>Lahir di</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $data->tempat_lahir }}">
        </div>
        <div class="form-group col-md-6">
        <label>Tanggal lahir</label>
        <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" value="{{ $data->tgl_lahir }}">
        </div>
    </div>
    
    <div class="form-group">
        <label>Jenis kelamin : <b>{{ $data->jenis_kelamin }}</b></label>

        <div class="col-xs-2">
          <input class="btn btn-warning btn-sm btn-gender" value="Ubah ?" readonly>
        </div>

        <select class="form-control gender" name="jenis_kelamin" id="jenis_kelamin" style="display:none;">
        <option value="{{ $data->jenis_kelamin }}">-- Pilih satu --</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Agama : <b>{{ $data->agama }}</b></label>

        <div class="col-xs-2">
          <input class="btn btn-dark btn-sm btn-agama" value="Ubah ?" readonly>
        </div>

        <select class="form-control agama" name="agama" id="agama" style="display:none;">
        <option value="{{ $data->agama }}">-- Pilih satu --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katholik">Katholik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        </select>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ $data->alamat }}</textarea>
    </div>

    <div class="form-group">
        <label>no. HP</label>
        <input type="text" class="form-control" name="hp" id="hp" value="{{ $data->hp }}">
    </div>
    
    <div class="btn-group float-right">
        <input type="submit" class="btn btn-success btn-sm" value="Update Data" readonly>
        <a href="{{ url('siswa') }}" class="btn btn-danger btn-sm">Cancel</a>
    </div>
    </form>
</div>
@endsection