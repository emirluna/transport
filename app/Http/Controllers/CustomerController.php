<?php

namespace App\Http\Controllers;

use App\Address;
use App\Customer;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class CustomerController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Users.indexCustomers')->with('users', $users);
    }

    public function create(){
        return view('Users.registerCustomer');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Name' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'Phone' => 'required|numeric',
            'Status' => 'required|numeric',
            'Street' => 'required|string',
            'Number' => 'required|numeric',
            'City' => 'required|string',


        ]);
    }


    public function store(Request $request){

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

        $user
            ->roles()
            ->attach(Role::where('rol', 'Customer')->first());


        $address = new Address;
        $address->Street = $request->input('Street');
        $address->Number = $request->input('Number');
        $address->State = $request->input('State');
        $address->City = $request->input('City');
        $address->Town = $request->input('Town');
        $address->ZipCode = $request->input('ZipCode');
        $address->Status = $request->input('Status');
        $address->Country = $request->input('Country');
        $address->User_id = $user->id;
        $address->save();


        $users = User::all();
        return view('Users.indexCustomers')->with('users', $users);


    }
}
