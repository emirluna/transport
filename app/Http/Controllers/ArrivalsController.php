<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrivalsController extends Controller
{
    public function index(){
        return view('arrivals.index');
    }
}
