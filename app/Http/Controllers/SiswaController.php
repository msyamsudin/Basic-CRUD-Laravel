<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
   public function index(){
    // select * from siswa
       $data = Siswa::all();
       return view('siswa.data_siswa')->with('data',$data);
   }

   public function create(){
       return view('siswa.tambah_siswa');
   }

   public function store(Request $request){
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
