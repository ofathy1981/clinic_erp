<?php

namespace App\Http\Controllers;

use App\Models\nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nurse=nurse::latest()->paginate(10);
        return view('Appointments.nurse.allnurse',compact('nurse'));
    }
    public function index2()
    {
        //
        $nurse=nurse::latest()->paginate(10);
        return view('Appointments.nurse.allnurse2',compact('nurse'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $nurse=nurse::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $nurse=nurse::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $nurse=nurse::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $nurse=nurse::all();
        }
        return view('Appointments.nurse.allnurse',compact('nurse'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Appointments.nurse.addnurse')->with('success','Created Succssefuly');

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
        $nurse =  nurse::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'shift'=>$request->shift,
            'specialization'=>$request->specialization,]);
            return redirect()->route('nurse.index');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(nurse $nurse)
    {
        //
        return view('Appointments.nurse.show',compact('nurse'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit(nurse $nurse)
    {
        //
        return view('Appointments.nurse.editnurse',compact('nurse'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nurse $nurse)
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
        $nurse->update($request->all());
        return redirect()->route('nurse.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(nurse $nurse)
    {
        //
        $nurse->delete();
        return redirect()->route('nurse.index');
    }
}
