<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    function functions(){
        $max = DB::table('student')->max('roll');
        $min = DB::table('student')->min('roll');
        $tableCount = DB::table('student')->count();
        $avarage = DB::table('student')->avg('roll');
        $sum = DB::table('student')->sum('roll');
        return $avarage;
    }
}
