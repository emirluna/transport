<?php

namespace App\Http\Controllers;

use App\GPS;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class GpsController extends Controller
{
    public function index(){
        $gps = GPS::all();

        return view('gps.index')->with('gps', $gps);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'IpAddress' => 'required|string|max:255',
            'Status' => 'required|numeric',
        ]);
    }



    public function store(Request $request)
    {
        $gps = new GPS;
        $gps->IpAddress = $request->input('IpAddress');
        $gps->Status  = $request->input('Status');

        $gps->save();

        return redirect()->route('gps.index');
    }


    public function edit($id){
        $gps = GPS::find($id);

        return view('gps.edit')->with('gps', $gps);

    }


    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'IpAddress' => 'required',
            'status' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('gps/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $gps = GPS::find($id);
            $gps->IpAddress = Input::get('IpAddress');
            $gps->Status = Input::get('status');
            $gps->save();

            // redirect
            Session::flash('message', 'GPS Editado Correctamente!');
            return Redirect::to('/gps');
        }
    }


    public function destroy($id)
    {
        $gps = GPS::whereId($id)->firstOrFail();
        $gps->delete();
        return redirect('gps');

    }

}
