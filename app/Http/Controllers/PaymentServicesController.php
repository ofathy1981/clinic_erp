<?php

namespace App\Http\Controllers;

use App\Models\payment_service;
use Illuminate\Http\Request;

class PaymentServicesController extends Controller
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
        $payment_id=$id;
        return view('Appointments.payment_service.addpayment_service',['payment_id'=>$payment_id])->with('');


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
        $urlschedule=$request->payment_id;
        $payment_service =  payment_service::create([
            'service_name'=>$request->service_name,
            'service_price'=>$request->service_price,
            'payment_id'=>$request->payment_id,
           ]);
            return redirect()->route('payments.edit',$urlschedule);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment_services  $payment_services
     * @return \Illuminate\Http\Response
     */
    public function show(payment_service $payment_services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment_services  $payment_services
     * @return \Illuminate\Http\Response
     */
    public function edit(payment_service $payment_service)
    {
        //
        return view('Appointments.payment_service.editpayment_service',compact('payment_service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment_services  $payment_services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment_service $payment_service)
    {
        //
        $urlschedule=$payment_service->payment_id;
        $payment_service->update($request->all());
        return redirect()->route('payments.edit',$urlschedule)
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment_services  $payment_services
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment_service $payment_service)
    {
        //
        $urlschedule=$payment_service->payment_id;
        $payment_service->delete();
        return redirect()->route('payments.edit',$urlschedule);
    }
}
