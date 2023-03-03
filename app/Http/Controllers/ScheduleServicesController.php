<?php

namespace App\Http\Controllers;

use App\Models\schedule_service;
use Illuminate\Http\Request;

class ScheduleServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $schedule_id=$id;
        return view('Appointments.schedule_service.addschedule_service',['schedule_id'=>$schedule_id])->with('');

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
        $urlschedule=$request->schedule_id;
        $schedule_service =  schedule_service::create([
            'service_name'=>$request->service_name,
            'service_price'=>$request->service_price,
            'schedule_id'=>$request->schedule_id,
           ]);
            return redirect()->route('schedule.edit',$urlschedule);
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\schedule_service  $schedule_service
     * @return \Illuminate\Http\Response
     */
    public function show(schedule_service $schedule_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\schedule_service  $schedule_service
     * @return \Illuminate\Http\Response
     */
    public function edit(schedule_service $schedule_service)
    {
        //
       
        // $schedule_service=schedule_service::where('schedule_id','=',$id);
        // dd($schedule_service);

        return view('Appointments.schedule_service.editschedule_service',compact('schedule_service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\schedule_service  $schedule_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schedule_service $schedule_service)
    {
        //
        $urlschedule=$schedule_service->schedule_id;
        $schedule_service->update($request->all());
        return redirect()->route('schedule.edit',$urlschedule)
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\schedule_service  $schedule_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(schedule_service $schedule_service)
    {
        //
        $urlschedule=$schedule_service->schedule_id;
        $schedule_service->delete();
        return redirect()->route('schedule.edit',$urlschedule);
    }
}
