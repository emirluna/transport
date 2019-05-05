<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Session;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $vehicle = Vehicle::all();
        return view('vehicle.index')->with('vehicle', $vehicle);
    }


    public function create(){
        return view('vehicle.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Name' => 'required|string|max:255',

        ]);
    }



    public function store(Request $request)
    {
        $vehicle = new Enterprise;
        $vehicle ->Name = $request->input('Name');
        $vehicle ->AdminId = $request->input('AdminId');
        $vehicle ->Status  = $request->input('Status');

        $enterprise->save();

        return redirect()->route('enterprise.index');
    }


    public function edit($id){
        /*$gps = GPS::find($id);

        return view('gps.edit')->with('gps', $gps);
*/
    }


    public function update($id)
    {
        /*      // validate
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
              }*/
    }


    public function destroy($id)
    {
        /*$gps = GPS::whereId($id)->firstOrFail();
        $gps->delete();
        return redirect('gps');
*/
    }
}
