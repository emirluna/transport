<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('Users.register');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
