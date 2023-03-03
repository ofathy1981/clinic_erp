<?php

namespace App\Http\Controllers;

use App\Models\medical_devices;
use App\Models\medical_service;
use App\Models\medicaldevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medical_service=medical_service::latest()->paginate(10);
        return view('Appointments.medical_service.allmedical_service',compact('medical_service'));
    }
    public function index2()
    {
        //
        $medical_service=medical_service::latest()->paginate(10);
        return view('Appointments.medical_service.allmedical_service2',compact('medical_service'));
    }
    public function search(Request $request)
    {
        //
        $medical_service_id=$request['medical_service_id']?? "";
        $name=$request['name']?? "";
        $price=$request['price']?? "";
        if($name !=""){
            $medical_service=medical_service::where('name','LIKE',$name)->get();

        }
        elseif($price != ""){
            $medical_service=medical_service::where('price','LIKE',$price)->get();

        }
        else{
            $medical_service=medical_service::all();
        }
        return view('Appointments.medical_service.allmedical_service',compact('medical_service'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medicaldevice=medical_devices::all();
        return view('Appointments.medical_service.addmedical_service',compact('medicaldevice'))->with('success','Created Succssefuly');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules=[

            'service_name'=>'required|max:250',
            'service_category'=>'required',
            'service_devices'=>'required',
            'service_price'=>'required|numeric',
            
          ];
    
          $msgs=[
            'service_name.required'=>'Please Fill This Field',
            'service_name.max'=>'Max Limit Exceeded',
            'service_category.required'=>'Please Fill This Field',
            'service_devices.required'=>'Please Fill This Field',
            'service_price.required'=>'Please Fill This Field',
            'service_price.numeric'=>'Please Fill This Field',
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //
        $medical_service =  medical_service::create([
            'service_name'=>$request->service_name,
            'service_category'=>$request->service_category,
            'service_devices'=>$request->service_devices,
            'service_price'=>$request->service_price,
            ]);
            return redirect()->route('medical_service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medical_service  $medical_service
     * @return \Illuminate\Http\Response
     */
    public function show(medical_service $medical_service)
    {
        //
        return view('Appointments.medical_service.show',compact('medical_service'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medical_service  $medical_service
     * @return \Illuminate\Http\Response
     */
    public function edit(medical_service $medical_service)
    {
        //
        return view('Appointments.medical_service.editmedical_service',compact('medical_service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medical_service  $medical_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medical_service $medical_service)
    {
        //
        $rules=[

            'service_name'=>'required|max:250',
            'service_category'=>'required',
            'service_devices'=>'required',
            'service_price'=>'required|numeric',
            
          ];
    
          $msgs=[
            'service_name.required'=>'Please Fill This Field',
            'service_name.max'=>'Max Limit Exceeded',
            'service_category.required'=>'Please Fill This Field',
            'service_devices.required'=>'Please Fill This Field',
            'service_price.required'=>'Please Fill This Field',
            'service_price.numeric'=>'Please Fill This Field',
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //
        $request->validate([
            'service_name'=>'required'
            ] );
        $medical_service->update($request->all());
        return redirect()->route('medical_service.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medical_service  $medical_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(medical_service $medical_service)
    {
        //
        $medical_service->delete();
        return redirect()->route('medical_service.index');
    }
}
