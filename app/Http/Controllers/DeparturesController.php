<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeparturesController extends Controller
{
    public function index(){
        return view('departures.index');
    }
}
