<?php

namespace App\Http\Controllers;

use App\Models\medical_devices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class medical_devicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medical_devices=medical_devices::latest()->paginate(10);
        // dd($medical_devices);
        return view('Appointments.medical_devices.allmedical_devices',compact('medical_devices'));
    }
    public function index2()
    {
        //
        $medical_devices=medical_devices::latest()->paginate(10);
        return view('Appointments.medical_devices.allmedical_devices2',compact('medical_devices'));
    }

    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $type=$request['type']?? "";
        $status=$request['status']?? "";
        if($name !=""){
            $medical_devices=medical_devices::where('name','LIKE',$name)->get();

        }
        elseif($type != ""){
            $medical_devices=medical_devices::where('type','LIKE',$type)->get();

        }
        elseif($status !=""){
            $status=medical_devices::where('status','LIKE',$status)->get();
        }
        else{
            $medical_devices=medical_devices::all();
        }
        return view('Appointments.medical_devices.allmedical_devices',compact('medical_devices'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Appointments.medical_devices.addmedical_devices')->with('success','Created Succssefuly');

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

            'name'=>'required|max:250',
            'type'=>'required',
            'status'=>'required',
            'lat_maintainance_date'=>'required|date',
            'for_medical_service'=>'required',
            
          ];
    
          $msgs=[
            'name.required'=>'Please Fill This Field',
            'name.max'=>'Max Limit Exceeded',
            'type.required'=>'Please Fill This Field',
            'status.required'=>'Please Fill This Field',
            'lat_maintainance_date.required'=>'Please Fill This Field',
            'lat_maintainance_date.date'=>'Please enter valid date',
            'for_medical_service.required'=>'Please Fill This Field',
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//

        $medical_devices =  medical_devices::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'status'=>$request->status,
             'lat_maintainance_date'=>$request->lat_maintainance_date,
            'for_medical_service'=>$request->for_medical_service,]);

            return redirect()->route('medical_device.index');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medical_devices  $medical_devices
     * @return \Illuminate\Http\Response
     */
    public function show(medical_devices $medical_devices)
    {
        //
        return view('Appointments.medical_devices.show',compact('medical_devices'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medical_devices  $medical_devices
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        // dd($meddev->id);
        $meddev = medical_devices::where('id', $id)->firstOrFail();
        return view('Appointments.medical_devices.editmedical_devices',compact('meddev'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medical_devices  $medical_devices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $request->validate([
        //     'name'=>'required'
        //     ] );
        $rules=[

            'name'=>'required|max:250',
            'type'=>'required',
            'status'=>'required',
            'lat_maintainance_date'=>'required|date',
            'for_medical_service'=>'required',
            
          ];
    
          $msgs=[
            'name.required'=>'Please Fill This Field',
            'name.max'=>'Max Limit Exceeded',
            'type.required'=>'Please Fill This Field',
            'status.required'=>'Please Fill This Field',
            'lat_maintainance_date.required'=>'Please Fill This Field',
            'lat_maintainance_date.date'=>'Please enter valid date',
            'for_medical_service.required'=>'Please Fill This Field',
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $medical_devices = medical_devices::where('id', $id)->firstOrFail();

        $medical_devices->name = $request->input('name');
        $medical_devices->type = $request->input('type');
        $medical_devices->status = $request->input('status');
        $medical_devices->for_medical_service = $request->input('for_medical_service');

        $medical_devices->lat_maintainance_date = $request->input('lat_maintainance_date');

        $medical_devices->save();


        // dd($medical_devices);
        // $medical_devices->update($request->all());
        return redirect()->route('medical_device.index2')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medical_devices  $medical_devices
     * @return \Illuminate\Http\Response
     */
    public function destroy(medical_devices $medical_devices)
    {
        //
        $medical_devices->delete();
        return redirect()->route('medical_device.index');
    }
}
