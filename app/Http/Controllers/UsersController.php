<?php

namespace App\Http\Controllers;

use App\Enterprise;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\BSON\Type;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Users.index')->with('users', $users);
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
            'enterprise_name' => 'required|string',
        ]);
    }




    public function store(Request $request)
    {


        $enterprise = new Enterprise;
        $enterprise->Name=$request->input('enterprise_name');
        $enterprise->Address_id=null;
        $enterprise->Status=(1);
        $enterprise->save();


        $user = new User;
        $user->Name = $request->input('Name');
        $user->LastName = $request->input('LastName');
        $user->Phone = $request->input('Phone');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->Status = $request->input('Status');
        $user->Enterprise_id = $enterprise->id;
        $user->save();

        $user
            ->roles()
            ->attach(Role::where('rol', 'Administrator')->first());


        return view('welcome')->with('registro', 1);



    }



    public function edit($id){
        $user = User::find($id);
        return view('Users.edit')->with('user', $user);
    }


}
