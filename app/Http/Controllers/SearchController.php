<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SearchController extends Controller
{
    public function index(Request $request){
        $search = $request->get('q');
        $result = Siswa::where('nama', 'LIKE', '%' . $search . '%')->paginate(5);

        return view('siswa.search_result', compact('search','result'));
    }
}
