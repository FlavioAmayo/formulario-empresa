<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = DB::table('persona')->get();
        return view('personas', ['personas' => $personas]);
    }
}
