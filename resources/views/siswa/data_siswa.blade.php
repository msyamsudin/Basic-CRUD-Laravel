@extends('layout')

@section('judul')
Data Siswa
@endsection

@section('konten')
    <div class="container">
        <br>
            <h1>Data Siswa</h1>
        <br>
    </div>

    <div class="container">
        <a href="{{ url('/siswa/create') }}" class="far fa-plus-square btn btn-success"> Tambah Data Siswa</a>
    </div>

<div class="container">
    <table class="table table-hover table-dark text-center">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $a)
            <tr>
                <th scope="row">{{ $a->nis }}</th>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->tempat_lahir.', '.$a->tgl_lahir }}</td>
                <td>{{ $a->jenis_kelamin }}</td>
                <td>{{ $a->agama }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->hp }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ url('siswa/'.$a->id) }}" class="fa fa-edit btn btn-primary btn-sm"> View</a>
                        <a href="{{ url('siswa/'.$a->id.'/edit') }}" class="fa fa-edit btn btn-primary btn-sm"> Edit</a>
    <form id="frm-hapus" action="{{ url('siswa/'.$a->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button type="button" class="btn btn-danger fas fa-trash btn-hapus"></button>
    </form>
                    </div>
                </td>
            </tr>
    @endforeach
    </tbody>
    </table>
</div>

<div id="konfirmasi-hapus" title="Hapus data" style="display: none;">
  <p>
    Anda akan menghapus data ini, lanjutkan?
  </p>
</div>
@endsection