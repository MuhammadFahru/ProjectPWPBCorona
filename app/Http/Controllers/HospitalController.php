<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $data['hospitals'] = Hospital::get();
        return view('dashboard.rumah-sakit',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.form.form-rs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                     


        // Validate the request...

        $request->validate([
            'hospital_name'=>'required',
            'province'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'logo'=>'required'
        ]);

        $hospital = new Hospital([
            'hospital_name'   => $request->get('hospital_name'),
            'province'        => $request->get('province'),
            'address'         => $request->get('address'),
            'phone_number'    => $request->get('phone_number'),
            'logo'            => $request->get('logo')
        ]);

        $hospital->save();
        return redirect('/rs-rujukan')->with('success', 'Hospital added!');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);
        return view('dashboard.form.form-rs',$hospital);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // Validate the request...

        $request->validate([
            'hospital_name'=>'required',
            'province'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'logo'=>'required'
        ]);

        $hospital = Hospital::find($id);
        $hospital->hospital_name   = $request->get('hospital_name');
        $hospital->province        = $request->get('province');
        $hospital->address         = $request->get('address');
        $hospital->phone_number    = $request->get('phone_number');
        $hospital->logo            = $request->get('logo');
        $hospital->save();
        
        return redirect('/rs-rujukan')->with('success', 'Rs updated!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = Hospital::find($id);
        $hospital->delete();

        return redirect('/rs-rujukan')->with('success', 'Rs deleted!');
    }
}
