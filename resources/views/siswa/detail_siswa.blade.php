@extends('layout')

@section('judul')
Detail Siswa
@endsection

@section('konten')
<br>
<h2 class="text-center">Detail Siswa</h2>
<br>
<div class="container justify-content-center col-5 border border-dark rounded">
    <form>
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">NIS</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->nis }}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Nama</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->nama }}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-5 col-form-label">TTL</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->nis }}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->jenis_kelamin }}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Agama</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->agama }}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Alamat</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->alamat }}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Nomor HP</label>
            <div class="col-sm-13">
                <input type="text" readonly class="form-control-plaintext" value=": {{ $data->hp }}">
            </div>
    </div>
    </form>
</div>
<div class="container justify-content-center col-5">
    <br>
    <a href="{{ url('siswa') }}" class="btn btn-danger btn float-right">Kembali</a>
</div>
@endsection