<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctor=doctor::latest()->paginate(10);
        return view('Appointments.doctor.alldoctor',compact('doctor'));
    }

    public function index2()
    {
        //
        $doctor=doctor::latest()->paginate(10);
        return view('Appointments.doctor.alldoctor2',compact('doctor'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $doctor=doctor::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $doctor=doctor::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $doctor=doctor::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $doctor=doctor::all();
        }
        return view('Appointments.doctor.alldoctor',compact('doctor'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Appointments.doctor.adddoctor')->with('success','Created Succssefuly');

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
            'phone'=>'required|numeric|max:15',
            'address'=>'required',
            'shift'=>'required',
            'specialization'=>'required',
            
          ];
    
          $msgs=[
            'name.required'=>'Please Fill This Field',
            'name.max'=>'Max Limit Exceeded',
            'phone.required'=>'Please Fill This Field',
            'phone.max'=>'Max Limit Exceeded', 
            'phone.numeric'=>'Value must be number',  
            'address.required'=>'Please Fill This Field',
            'shift.required'=>'Please Fill This Field',
            'specialization.required'=>'Please Fill This Field',

            


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $doctor =  doctor::create([
       'name'=>$request->name,
       'phone'=>$request->phone,
       'address'=>$request->address,
       'shift'=>$request->shift,
       'specialization'=>$request->specialization,]);
       return redirect()->route('doctor.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
        return view('Appointments.doctor.show',compact('doctor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor)
    {
        //
        return view('Appointments.doctor.editdoctor',compact('doctor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctor $doctor)
    {
        //
        $rules=[

            'name'=>'required|max:250',
            'phone'=>'required|numeric|max:15',
            'address'=>'required',
            'shift'=>'required',
            'specialization'=>'required',
            
          ];
    
          $msgs=[
            'name.required'=>'Please Fill This Field',
            'name.max'=>'Max Limit Exceeded',
            'phone.required'=>'Please Fill This Field',
            'phone.max'=>'Max Limit Exceeded', 
            'phone.numeric'=>'Value must be number',  
            'address.required'=>'Please Fill This Field',
            'shift.required'=>'Please Fill This Field',
            'specialization.required'=>'Please Fill This Field',

            


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //
        $request->validate([
            'name'=>'required'
            ] );
        $doctor->update($request->all());
        return redirect()->route('doctor.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor $doctor)
    {
        //
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
