<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Http\Livewire\ScheduleService;
use App\Models\schedule,App\Models\nurse,App\Models\doctor,App\Models\schedule_service,App\Models\patient,App\Models\medical_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Database\Eloquent\Builder;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        return view('Appointments.schedule.appointments_cal',['events'=>$events,'nurses'=> $nurses,'doctors'=>$doctors]);
    }

    public function updatesched(Request $request ,$id)
    {
        $schedule = schedule::find($id);
        if(! $schedule) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $schedule->update([
            'schedule_start' => $request->schedule_start,
            'schedule_end' => $request->schedule_end,
        ]);
        return response()->json('Event updated success');
    }

    public function del($id)
    {
        $schedule = schedule::find($id);
        if(! $schedule) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $schedule->delete();
        return $id;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request){
        $schedule = schedule::create([
            'patient_name'=>$request->patient_name,
            'cid'=>$request->cid,
            'nurse'=>$request->nurse,
            'room'=>$request->room,
            'work'=>$request->work,
            'doctor'=>$request->doctor,
            'known_us_from'=>$request->known_us_from,
            'sp_beuty'=>$request->sp_beuty,
            'duration'=>$request->duration,
            'case'=>$request->pcase,
            'notes'=>$request->notes,
            'total_payment'=>$request->total_payment,
            'total_number_of_services'=>$request->total_number_of_services,
            'schedule_status'=>$request->schedule_status,
            'user_id'=>Auth::id(),
            'schedule_start'=>$request->schedule_start,
            'schedule_end'=>$request->schedule_end
           
        ]);
        foreach ($request->schedule_service as $service) {
            $schedule->schedule_service()->save(
                
                new schedule_service([ 
                    'service_name'=>$service['service_name'],
                    'service_price' => $service['service_price']])

                );
                
        }      
// dd("success");
        $color = null;

        // if($booking->title == 'Test') {
        //     $color = '#924ACE';
        // }

        return response()->json([
            'id' => $schedule->id,
            'start' => $schedule->schedule_start,
            'end' => $schedule->schedule_end,
            'title' => $schedule->patient_name
            // 'color' => $color ? $color: '',

        ]);

    } 


    public function check(Request $request)
    {
        //
        $date1=$request->schedule_start;
        $date2=$request->schedule_end;
 
        // dd('the date 1 is '.$date2);
        // $query=DB::table('schedules')
        //     ->join('schedule_services', 'schedules.id', '=', 'schedule_services.schedule_id')
        //     ->select('schedule_services.service_name')->where('schedules.schedule_start','=',$thedate)
        //     ->get();
      
    //    $query=schedule::with('schedule.items')->find($id);

    // dd('the date is '.$query);   

        //     $thedate="2022-06-15 00:00:00";




        $result=DB::table('medical_services')->select('service_name')->whereNotIn('service_name',
        function($query )use ($request) {
            // $thedate1="2022-06-16 00:00:00";
            // $thedate2="2022-06-16 01:00:00";
            $thedate1=$request->schedule_start;
            $thedate2=$request->schedule_end;
            $query->select('schedule_services.service_name')->from('schedules')->join('schedule_services', 'schedules.id', '=', 'schedule_services.schedule_id')
            ->where('schedules.schedule_start','>=',$thedate1)->where('schedules.schedule_end','<=',$thedate2);
            }
      
         )->get();



//    dd('the date is '.response()->json($result));   
   return response()->json($result);
        // return response()->json($result);


    }


    public function index()
    {
        //
        $schedule=schedule::latest()->paginate(10);
        return view('Appointments.schedule.allschedule',compact('schedule'));
    }
    public function index2()
    {
        //
        $schedule=schedule::latest()->paginate(10);
        return view('Appointments.schedule.allschedule2',compact('schedule'));
    }

    public function search(Request $request)
    {
        //
        $patient_name=$request['patient_name']?? "";
        $schedule_start=$request['schedule_start']?? "";
        $schedule_status=$request['schedule_status']?? "";
        if($patient_name !=""){
            $schedule=schedule::where('patient_name','LIKE',$patient_name)->get();

        }
        elseif($schedule_start != ""){
            $schedule=schedule::where('schedule_date','LIKE',$schedule_start)->get();

        }
        elseif($schedule_status !=""){
            $schedule=schedule::where('schedule_status','LIKE',$schedule_status)->get();
        }
        else{
            $schedule=schedule::all();
        }
        return view('Appointments.schedule.allschedule',compact('schedule'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nurses=nurse::all();
        $doctors=doctor::all();
        $patient=patient::all();
        return view('Appointments.schedule.addschedule',compact(['nurses','doctors','patient']))->with('success','Created Succssefuly');

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

            'patient_name'=>'required|max:250',
            'cid'=>'required|numeric',
            'schedule_start'=>'required',
            'schedule_end'=>'required',
            'nurse'=>'required',
            'room'=>'required',
            'work'=>'required',
            'known_us_from'=>'required',
            'sp_beuty'=>'required',
            'duration'=>'required|numeric',
            'case'=>'required',
            'notes'=>'required',
            'total_payment'=>'required|numeric',
            'total_number_of_services'=>'required|numeric',
            'schedule_status'=>'required',




          ];
    
          $msgs=[
            'patient_name.required'=>'Please Fill This Field',
            'patient_name.max'=>'Max Limit Exceeded',
            'cid.required'=>'Please Fill This Field',
            'cid.numeric'=>'Value must be number',  
            'schedule_start.required'=>'Please Fill This Field',
            'schedule_end.required'=>'Please Fill This Field',
            'nurse.required'=>'Please Fill This Field',
            'room.required'=>'Please Fill This Field',
            'work.required'=>'Please Fill This Field',
            'known_us_from.required'=>'Please Fill This Field',
            'sp_beuty.required'=>'Please Fill This Field',
            'duration.required'=>'Please Fill This Field',
            'duration.numeric'=>'Value must be number',
            'case.required'=>'Please Fill This Field',
            'notes.required'=>'Please Fill This Field',
            'total_payment.required'=>'Please Fill This Field',
            'total_payment.numeric'=>'Value must be number',
            'total_number_of_services.required'=>'Please Fill This Field',
            'total_number_of_services.numeric'=>'Value must be number',
            'schedule_status.required'=>'Please Fill This Field'


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                // dd($validator);
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
        //
        $schedule =  schedule::create([
           
            'patient_name'=>$request->patient_name,
            'cid'=>$request->cid,



            // 'schedule_time'=>$request->schedule_time,
            'nurse'=>$request->nurse,
            'room'=>$request->room,
            'work'=>$request->work,
            'doctor'=>$request->doctor,
            'known_us_from'=>$request->known_us_from,
            'sp_beuty'=>$request->sp_beuty,
            'duration'=>$request->duration,
            'case'=>$request->case,
            'notes'=>$request->notes,
            'total_payment'=>$request->total_payment,
            'total_number_of_services'=>$request->total_number_of_services,
            'schedule_status'=>$request->schedule_status,
             'user_id'=>Auth::id(),
             'schedule_start'=>$request->schedule_start,
            'schedule_end'=>$request->schedule_end
            ,]);

            // $schedule->schedule_service()->save(
           
            //     new workdomain_fees([
            //         'service_name_en' =>  $srvnameen[$i] ,
            //         'service_name_ar'=>  $srvnamear[$i],
            //          'service_cost_en'=>  $srvcosten[$i],
            //           'service_cost_ar'=> $srvcostar[$i],
            //          'service_desc_en'=> $srvdescen[$i],
            //          'service_desc_ar'=>  $srvdescar[$i],
            //     ]),
    
            // );

            foreach ($request->schedule_service as $service) {
                $schedule->schedule_service()->save(
                    
                    new schedule_service([ 
                        'service_name'=>$service['service_name'],
                        'service_price' => $service['service_price']])

                    );
                    
            }
            if(url()->previous()==route('schedule.calender'))
            {            return redirect()->route('schedule.calender');}
            else{            return redirect()->route('schedule.index');
}

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(schedule $schedule)
    {
        //
        return view('Appointments.schedule.show',compact('schedule'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(schedule $schedule)
    {
        //
        $id=$schedule->id;
        // dd($schedule->id);
        $schedule_service=schedule_service::where('schedule_id','=',$id)->get();
        //  dd($schedule_service);
        $nurses=nurse::all();
        $doctors=doctor::all();
        return view('Appointments.schedule.editschedule',compact(['schedule','nurses','doctors','schedule_service']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schedule $schedule)
    {
        //
        // $rules=[

        //     'patient_name'=>'required|max:250',
        //     'cid'=>'required|numeric|max:12|unique:patients',
        //     'gender'=>'required',
        //     'schedule_start'=>'required|date',
        //     'schedule_end'=>'required|date',
           
        //     // 'schedule_time'=>'required',
        //     'nurse'=>'required',
        //     'room'=>'required',
        //     'work'=>'required',
        //     'known_us_from'=>'required',
        //     'sp_beuty'=>'required',
        //     'duration'=>'required|numeric',
        //     'case'=>'required',
        //     'notes'=>'required',
        //     'total_payment'=>'required|numeric',
        //     'total_number_of_services'=>'required|numeric',
        //     'schedule_status'=>'required',




        //   ];
    
        //   $msgs=[
        //     'patient_name.required'=>'Please Fill This Field',
        //     'patient_name.max'=>'Max Limit Exceeded',
        //     'cid.required'=>'Please Fill This Field',
        //     'cid.max'=>'Max Limit Exceeded', 
        //     'cid.numeric'=>'Value must be number',  
        //     'cid.unique'=>'Value Already Exist', 
        //     'gender.required'=>'Please Fill This Field',
        //     'schedule_start.required'=>'Please Fill This Field',
        //     'schedule_start.date'=>'Enter Valid Date Format',
        //     'schedule_end.date'=>'Enter Valid Date Format',
        //     'schedule_end.required'=>'Please Fill This Field',
           
        //     // 'schedule_time.required'=>'Please Fill This Field',
        //     'nurse.required'=>'Please Fill This Field',
        //     'room.required'=>'Please Fill This Field',
        //     'work.required'=>'Please Fill This Field',
        //     'known_us_from.required'=>'Please Fill This Field',
        //     'sp_beuty.required'=>'Please Fill This Field',
        //     'duration.required'=>'Please Fill This Field',
        //     'duration.numeric'=>'Value must be number',
        //     'case.required'=>'Please Fill This Field',
        //     'notes.required'=>'Please Fill This Field',
        //     'total_payment.required'=>'Please Fill This Field',
        //     'total_payment.numeric'=>'Value must be number',
        //     'total_number_of_services.required'=>'Please Fill This Field',
        //     'total_number_of_services.numeric'=>'Value must be number',
        //     'schedule_status.required'=>'Please Fill This Field',


    
    
    
        //   ];
        //     $validator=Validator::make($request->all(),$rules,$msgs);
    
        //     if($validator->fails()){
        //         return redirect()->back()->withErrors($validator)->withInputs($request->all());
        //     }
        //
        $request->validate([
            'patient_name'=>'required'
            ] );
        $schedule->update($request->all());
        // dd(url()->previous());
        if(url()->previous()==route('schedule.calender'))
        {            
            return redirect()->route('schedule.calender');}
        else{ 
        return redirect()->route('schedule.index')
        ->with('success','update success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(schedule $schedule)
    {
        //
        $schedule->delete();
        return redirect()->route('schedule.index2');
    }
}
