<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ItemsExport;
use App\Imports\ItemsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Item;
use Input;


class ImportExportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

  

    public function importexport(){
        return view('import');
    }

  public function menuExport()
    {
              return Excel::download(new ItemsExport, 'Menu.xlsx');

    }

    public function menuImport(Request $request)
    {
              Item::truncate();

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new ItemsImport, $file); //IMPORT FILE 
            return redirect()->back()->with(['success' => 'Upload success']);
            }
        return redirect()->back()->with(['error' => 'Please choose file before']);

    
    }
      
    


}
