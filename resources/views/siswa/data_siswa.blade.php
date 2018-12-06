@extends('layout')

@section('judul')
Data Siswa
@endsection

@section('konten')
<div class="container mt-5" style="z-index:0">
    <br>
        <h1>Daftar Data Siswa</h1>

        <div class="count-checkboxes-wrapper">
  </div>

    <div class="float-right">
        <a href="{{ url('/siswa/create') }}" class="far fa-plus-square btn btn-success"  data-toggle="tooltip" data-placement="top" title="Tambah data siswa"></a>
    </div><br><br>
    <form action="{{ route('multipledeletedata') }}" method="POST" id="Multiple-delete">
    {{ csrf_field() }}
    <table class="table table-hover table-dark text-center" id="tabelSaya">
    <thead>
        <tr>
            <th>
              <button type="button" class="fa fa-trash btn btn-sm btn-danger btn-multi-hapus" data-toggle="modal" data-target="#modalKonfirmasiMulti"><span id="dataTerpilih"></span></button>
            </th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $a)
            <tr>
                <td><input type="checkbox" name="delmulti[]" value="{{ $a->id }}"></td>
                <td>{{ $a->nis }}</td>
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
    </tbody>
    </table>
    </form>
    {{ $data->links() }}
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
      </div>

      <form id="formHapusData" action="" method="post">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary">Ya.</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Konfirmasi hapus (multiple data) -->
<div class="modal fade" id="modalKonfirmasiMulti" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKonfirmasiMultiLabel">Konfirmasi hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Anda memilih <span id="count-checked-checkboxes"></span> data untuk dihapus. Lanjutkan ?</p>
      </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <a href="#" onclick="submitMultiDelete()" class="btn btn-primary">Ya.</a>
        </div>
    </div>
  </div>
</div>
@endsection