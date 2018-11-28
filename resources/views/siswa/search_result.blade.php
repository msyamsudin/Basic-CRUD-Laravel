@extends('layout')

@section('judul')
Data Siswa
@endsection

@section('konten')
<div class="container">
    <br>
        <h1>Daftar Data Siswa</h1>

    <div class="float-right">
        <a href="{{ url('/siswa/create') }}" class="far fa-plus-square btn btn-success"  data-toggle="tooltip" data-placement="top" title="Tambah data siswa"></a>
    </div><br><br>
        
    <table class="table table-hover table-dark text-center" id="tabelSaya">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    @if(count($result))
    @foreach($result as $a)
            <tr>
                <th scope="row">{{ $a->nis }}</th>
                <td>{{ $a->nama }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ url('siswa/'.$a->id) }}" class="fa fa-eye btn btn-primary btn-sm"> View</a>
                        <a href="{{ url('siswa/'.$a->id.'/edit') }}" class="fa fa-edit btn btn-primary btn-sm"> Edit</a>
                        <a href="#" class="fa fa-trash btn btn-danger btn-sm btn-hapus" data-url="{{ url('siswa/'.$a->id) }}" data-nis="{{ $a->nis }}" data-nama="{{ $a->nama }}" data-toggle="modal" data-target="#modalKonfirmasi"> Hapus</a>
                    </div>
                </td>
            </tr>
    @endforeach
    @else
    <tr>
        <td></td>
        <td><p class="font-weight-bold text-center">Data tidak ditemukan</p></td>
        <td></td>
    </tr>
    @endif
    </tbody>
    </table>
    {{ $result->links() }}
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
        <p id="pesanHapusCustomJS"></p>
        
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