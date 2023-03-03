<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\outgoing_call,App\Models\schedule,App\Models\nurse,App\Models\doctor,App\Models\contact_group,App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth
;
class OutgoingCallController extends Controller
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
        return view('call_center.outgoing_call.appointments_cal',['events'=>$events,'nurses'=> $nurses,'doctors'=>$doctors]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $outgoing_call=outgoing_call::latest()->paginate(10);
        return view('call_center.outgoing_call.alloutgoing_call',compact('outgoing_call'));
    }

    public function followup_out()
    {
        //
        $outgoing_call=outgoing_call::where('recalldate','!=','');
        return view('call_center.outgoing_call.followup_out',compact('outgoing_call'));
    }


    public function index2()
    {
        //
        $outgoing_call=outgoing_call::latest()->paginate(10);
        return view('call_center.outgoing_call.alloutgoing_call2',compact('outgoing_call'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $outgoing_call=outgoing_call::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $outgoing_call=outgoing_call::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $outgoing_call=outgoing_call::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $outgoing_call=outgoing_call::all();
        }
        return view('call_center.outgoing_call.alloutgoing_call',compact('outgoing_call'));
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

        return view('call_center.outgoing_call.addoutgoing_call',compact('contact_group'))->with('success','Created Succssefuly');

    }
    public function autocomplete(Request $request)
    {
        $data = patient::select( DB::raw("CONCAT(patients.first_name,' ',patients.father_name) as value" ), "id")
                    ->where('first_name', 'LIKE', '%'. $request->get('clntnme'). '%')
                    ->get();
                   
        return response()->json($data);
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
            'client_name'=>'required',
            'call_case'=>'required',
            'client_phone'=>'required',
            'Appointment_status'=>'required',

            
          ];
    
          $msgs=[
            'agent_name.required'=>'Please Fill This Field',
            'call_date.required'=>'Please Fill This Field',
            'client_name.required'=>'Please Fill This Field',
            'call_case.required'=>'Please Fill This Field',
            'client_phone.required'=>'Please Fill This Field',
            'Appointment_status.required'=>'Please Fill This Field',
            'call_date.date'=>'enter valid date', 

           


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $outgoing_call =  outgoing_call::create([

       'user_id'=>Auth::id(),
       'agent_name'=>$request->agent_name,
       'call_date'=>$request->call_date,
       'client_name'=>$request->client_name,
       'client_phone'=>$request->client_phone,
       'lastcalldate'=>$request->lastcalldate,
       'recalldate'=>$request->recalldate,
       'call_case'=>$request->call_case,
       'notes'=>$request->notes,
       'call_group'=>$request->call_group,
       'Appointment_status'=>$request->Appointment_status
       
       ,]);
       return redirect()->route('outgoing_call.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\outgoing_call  $outgoing_call
     * @return \Illuminate\Http\Response
     */
    public function show(outgoing_call $outgoing_call)
    {
        //
        return view('call_center.outgoing_call.show',compact('outgoing_call'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\outgoing_call  $outgoing_call
     * @return \Illuminate\Http\Response
     */
    public function edit(outgoing_call $outgoing_call)
    {
        //
        return view('call_center.outgoing_call.editoutgoing_call',compact('outgoing_call'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\outgoing_call  $outgoing_call
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, outgoing_call $outgoing_call)
    {
        //
        $rules=[

            'agent_name'=>'required',
            'call_date'=>'required|date|',
            'client_name'=>'required',
            'call_case'=>'required',
            'client_phone'=>'required',
            'Appointment_status'=>'required',

            
          ];
    
          $msgs=[
            'agent_name.required'=>'Please Fill This Field',
            'call_date.required'=>'Please Fill This Field',
            'client_name.required'=>'Please Fill This Field',
            'call_case.required'=>'Please Fill This Field',
            'client_phone.required'=>'Please Fill This Field',
            'Appointment_status.required'=>'Please Fill This Field',
            'call_date.date'=>'enter valid date', 

           


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //

        $outgoing_call->update($request->all());
        return redirect()->route('outgoing_call.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\outgoing_call  $outgoing_call
     * @return \Illuminate\Http\Response
     */
    public function destroy(outgoing_call $outgoing_call)
    {
        //
        $outgoing_call->delete();
        return redirect()->route('outgoing_call.index');
    }
}
