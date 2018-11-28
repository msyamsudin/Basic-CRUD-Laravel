<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
   public function index(){
       $data = Siswa::paginate(5);
       return view('siswa.data_siswa')->with('data',$data);
   }

   public function create(){
       return view('siswa.tambah_siswa');
   }

   public function store(Request $request){

        $rules = [
            "nis"           => 'required | min:10 | max:10',
            "nama"          => 'required',
            "tempat_lahir"  => 'required',
            "tgl_lahir"     => 'required',
            "jenis_kelamin" => 'required',
            "agama"         => 'required',
            "alamat"        => 'required',
            "hp"            => 'required | numeric'
        ];

        $customMessages = [
            'required'  => 'Kolom :attribute tidak boleh kosong',
            'unique'    => ':attribute sudah digunakan',
            'min'       => 'Kolom :attribute tidak boleh kurang dari :min karakter',
            'max'       => 'Kolom :attribute tidak boleh lebih dari :max karakter',
        ];

        $request->validate($rules, $customMessages);

        Siswa::create($request->all());
        return redirect('siswa');
   }

   public function show($id){
       // select * from siswa where id = $id
       $data = Siswa::find($id);
       return view('siswa.detail_siswa')->with('data',$data);
   }

   public function edit($id){
       // select * from siswa where id = $id
       $data = Siswa::find($id);
       return view('siswa.edit_siswa')->with('data',$data);
   }

   public function update(Request $request, $id){
       // update siswa set .... = .... where id = $id
       Siswa::find($id)->update($request->all());
       return redirect('siswa');
   }

   public function destroy($id){
        Siswa::find($id)->delete();
        return redirect('siswa');
   }
}
