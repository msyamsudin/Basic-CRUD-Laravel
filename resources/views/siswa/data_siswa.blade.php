@extends('layout')

@section('judul')
Data Siswa
@endsection

@section('konten')
    <div class="container">
        <br>
            <h1>Daftar Data Siswa</h1>
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
                <td>
                    <div class="btn-group">
                        <a href="{{ url('siswa/'.$a->id) }}" class="fa fa-eye btn btn-primary btn-sm"> View</a>
                        <a href="{{ url('siswa/'.$a->id.'/edit') }}" class="fa fa-edit btn btn-primary btn-sm"> Edit</a>
                        <a href="#" class="fa fa-trash btn btn-danger btn-sm btn-hapus" data-url="{{ url('siswa/'.$a->id) }}" data-nis="{{ $a->nis }}" data-nama="{{ $a->nama }}" data-toggle="modal" data-target="#modalKonfirmasi"> Hapus</a>
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

<!-- Konfirmasi hapus -->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKonfirmasiLabel">Konfirmasi hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="pesanCustomJS"></p>
        
        <form id="formHapusData" action="" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Ya.</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection