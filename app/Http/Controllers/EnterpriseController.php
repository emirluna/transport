<?php

namespace App\Http\Controllers;

use App\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{

    public function index(){
        $enterprise = Enterprise::all();
        return view('enterprise.index')->with('enterprise', $enterprise);
    }


    public function create(){
        return view('enterprise.register');
    }

    protected function validator(array $data)
    {
      return Validator::make($data, [
          'Name' => 'required|string|max:255',

      ]);
    }



    public function store(Request $request)
    {
        $enterprise = new Enterprise;
        $enterprise ->Name = $request->input('Name');
        $enterprise ->Status  = $request->input('Status');

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
