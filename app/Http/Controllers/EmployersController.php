<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class EmployersController extends Controller
{
    public function index(){
        $user = User::all();

        return view('Users.index')->with('user', $user);
    }

    public function create(){
        return view('Users.register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Name' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:100',
            'password' => 'required|string|min:6|confirmed',
            'Phone' => 'required|numeric',
            'Status' => 'required|numeric',
        ]);
    }




    public function store(Request $request)
    {
        $user = new User;
        $user->Name = $request->input('Name');
        $user->LastName = $request->input('LastName');
        $user->Phone = $request->input('Phone');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->Status = $request->input('Status');
        $user->Enterprise_id = $request->input('Enterprise_id');
        $user->save();

        //$rol = $request->input('Rol');

        $user
            ->roles()
            ->attach(Role::where('rol', $request->input('Rol'))->first());


        $users = User::all();
        return view('Users.index')->with('user', $users);
    }




    public function edit($id){
        $user = User::find($id);
        return view('Users.edit')->with('user', $user);
    }

}
