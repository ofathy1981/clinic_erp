<?php

namespace App\Http\Controllers;

use App\Models\incoming_call,App\Models\schedule,App\Models\nurse,App\Models\doctor,App\Models\contact_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class IncomingCallController extends Controller
{
    public function calender()
    {
        //
        $nurses=nurse::all();
        $doctors=doctor::all();
        $events=array();
        $schedules=schedule::all();
        foreach($schedules as $schedule){

            $color = null;
            if($schedule->work == 'Laser duetto') {
                $color = '#99004C';
            }
            if($schedule->work == 'Facial') {
                $color = '#FF99FF';
            }
            if($schedule->work == 'DeerMachine/Smart Shape2') {
                $color = '#9999FF';
            }
            if($schedule->work == 'IBL laser') {
                $color = '#99FFFF';
            }
            if($schedule->work == 'Micro Blending') {
                $color = '#99FF33';
            }
            if($schedule->work == 'Dr Rowda Sercslm') {
                $color = '#009999';
            }
            if($schedule->work == 'Laser Candela') {
                $color = '#FF0000';
            }
            if($schedule->work == 'Waiiting') {
                $color = '#C0C0C0';
            }
            if($schedule->work == 'Smart Shape 1') {
                $color = '#FF8000';
            }
            if($schedule->work == 'laser Duetto 2') {
                $color = '#FFFF00';
            }
            if($schedule->work == 'room10') {
                $color = '#660066';
            }


        $events[]=[
        'id'=> $schedule->id  ,
        'title'=>"Patient Name: ".$schedule->patient_name."    ||Work :".$schedule->work.$schedule->id,
        'start'=>$schedule->schedule_start,
        'end'=>$schedule->schedule_end,
        'color'=>$color
        // 'work'=>$schedule->work,
        

    ];

        }
        return view('call_center.incoming_call.appointments_cal',['events'=>$events,'nurses'=> $nurses,'doctors'=>$doctors]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function followup_in()
    {
        //
        $incoming_call=incoming_call::latest()->paginate(10);
        return view('call_center.incoming_call.allincoming_call',compact('incoming_call'));
    }


    public function index()
    {
        //
        $incoming_call=incoming_call::latest()->paginate(10);
        return view('call_center.incoming_call.allincoming_call',compact('incoming_call'));
    }

    public function index2()
    {
        //
        $incoming_call=incoming_call::latest()->paginate(10);
        return view('call_center.incoming_call.allincoming_call2',compact('incoming_call'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $incoming_call=incoming_call::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $incoming_call=incoming_call::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $incoming_call=incoming_call::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $incoming_call=incoming_call::all();
        }
        return view('call_center.incoming_call.allincoming_call',compact('incoming_call'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contact_group=contact_group::all();
        return view('call_center.incoming_call.addincoming_call',compact('contact_group'))->with('success','Created Succssefuly');

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

            'agent_name'=>'required',
            'call_date'=>'required|date|',
            'name'=>'required',
            'call_case'=>'required',
            'phone'=>'required',
            'Appointment_status'=>'required',

            
          ];
    
          $msgs=[
            'agent_name.required'=>'Please Fill This Field',
            'call_date.required'=>'Please Fill This Field',
            'name.required'=>'Please Fill This Field',
            'call_case.required'=>'Please Fill This Field',
            'phone.required'=>'Please Fill This Field',
            'Appointment_status.required'=>'Please Fill This Field',
            'call_date.date'=>'enter valid date', 

           


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $incoming_call =  incoming_call::create([

       'user_id'=>Auth::id(),
       'agent_name'=>$request->agent_name,
       'call_date'=>$request->call_date,
       'name'=>$request->name,
       'phone'=>$request->phone,
       'lastcalldate'=>$request->lastcalldate,
       'recalldate'=>$request->recalldate,
       'call_case'=>$request->call_case,
       'notes'=>$request->notes,
       'call_group'=>$request->call_group,
       'Appointment_status'=>$request->Appointment_status
       
       ,]);
       return redirect()->route('incoming_call.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\incoming_call  $incoming_call
     * @return \Illuminate\Http\Response
     */
    public function show(incoming_call $incoming_call)
    {
        //
        return view('call_center.incoming_call.show',compact('incoming_call'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\incoming_call  $incoming_call
     * @return \Illuminate\Http\Response
     */
    public function edit(incoming_call $incoming_call)
    {
        //
        return view('call_center.incoming_call.editincoming_call',compact('incoming_call'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\incoming_call  $incoming_call
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, incoming_call $incoming_call)
    {
        //
        $rules=[

            'agent_name'=>'required',
            'call_date'=>'required|date|',
            'name'=>'required',
            'call_case'=>'required',
            'phone'=>'required',
            'Appointment_status'=>'required',

            
          ];
    
          $msgs=[
            'agent_name.required'=>'Please Fill This Field',
            'call_date.required'=>'Please Fill This Field',
            'name.required'=>'Please Fill This Field',
            'call_case.required'=>'Please Fill This Field',
            'phone.required'=>'Please Fill This Field',
            'Appointment_status.required'=>'Please Fill This Field',
            'call_date.date'=>'enter valid date', 

           


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //

        $incoming_call->update($request->all());
        return redirect()->route('incoming_call.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\incoming_call  $incoming_call
     * @return \Illuminate\Http\Response
     */
    public function destroy(incoming_call $incoming_call)
    {
        //
        $incoming_call->delete();
        return redirect()->route('incoming_call.index');
    }


    
}
