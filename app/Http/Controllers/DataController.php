<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;

use App\Imports\DatasImport;
use File;

class DataController extends Controller
{
    //
    public function processData(Request $request) {
        // dd($request->all());
        $array = Excel::toArray(new DatasImport, $request->file('fileExcel'));

        // dd($array[0]);

        // array[0] adalah sheet 1
        array_shift($array[0]);

        return view('tableview')->with('datas', $array[0]);

    }

    public function autoProcessData(Request $request) {
        // dd($request->all());
        $array = Excel::toArray(new DatasImport, 'Holo.xlsx');


        // dd($array[0]);

        // array[0] adalah sheet 1
        array_shift($array[0]);

        return view('tableview')->with('datas', $array[0]);

    }
}
