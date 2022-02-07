<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Catalog;

class PagesController extends Controller
{
    public function index()
    {
        #$feature= DB::table('catalog')->where('featured', 1)->get();
        $featuring = Catalog::where('featuring', 1);

        return view('index', compact('featuring'));
    }
}
