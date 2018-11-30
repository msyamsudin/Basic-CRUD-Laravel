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

    public function AutoCompleteFunc(Request $request){
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Siswa::where('nama', 'LIKE', '%' . $query . '%')->get();

            $output = '<ul class="dropdown-menu position-relative" style="display:block;">';
            foreach($data as $row)
            {
                $output .= '<li class="dropdown-item">'.$row->nama.'</li>';
            }
            $output .= '</ul>';

            echo $output;
        }
    }
}
