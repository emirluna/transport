<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Role extends Controller
{
    public function index(){
        $role = Role::all();

        return view('Users.index')->with('role', $role);
    }

    public function create(){
        return view('Role.register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            ]);
    }




    public function store(Request $request)
    {


    }


    public function edit($id)
    {
    }

}
