<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ExportController;
// use App\Http\Controllers\Helpers\SearchQueryGeneratorController;
use App\Http\Controllers\Helpers\PortReportGenerate;
use App\Http\Controllers\Helpers\CacheClass;
use App\Http\Controllers\Helpers\SearchYoutube;
use App\TotalSong;

class HomeController extends Controller
{

    public function __construct(){
        // $this->database = app('App\\'.$this->database);
    }

    public function index(Request $request)
    {
        date_default_timezone_set("America/New_York");
        $items = TotalSong::where('id', '<=', '20')->get();
        return view('admin.home.index', compact('items'));
    }

    public function search(Request $request)
    {
        // die($request->search);
        // date_default_timezone_set("America/New_York");
        // $items = TotalSong::where('id', '<=', '8')->get();
        // return view('admin.home.index', compact('items'));

        $items = SearchYoutube::searchResult($request->search);        
        return response()->json(compact('items', 200));        
    }
}
