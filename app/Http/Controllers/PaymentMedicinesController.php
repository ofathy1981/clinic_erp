<?php

namespace App\Http\Controllers;

use App\Models\payment_medicine;
use Illuminate\Http\Request;

class PaymentMedicinesController extends Controller
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
        return view('Appointments.payment_medicine.addpayment_medicine',['payment_id'=>$payment_id])->with('');
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
        $payment_medicine =  payment_medicine::create([
            'medicine_name'=>$request->medicine_name,
            'unit_price'=>$request->unit_price,
            'medicine_quantity'=>$request->medicine_quantity,
            'payment_id'=>$request->payment_id,
           ]);
            return redirect()->route('payments.edit',$urlschedule);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment_medicines  $payment_medicines
     * @return \Illuminate\Http\Response
     */
    public function show(payment_medicine $payment_medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment_medicines  $payment_medicines
     * @return \Illuminate\Http\Response
     */
    public function edit(payment_medicine $payment_medicine)
    {
        //

        return view('Appointments.payment_medicine.editpayment_medicine',compact('payment_medicine'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment_medicines  $payment_medicines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment_medicine $payment_medicine)
    {
        //
        $urlschedule=$payment_medicine->payment_id;
        $payment_medicine->update($request->all());
        return redirect()->route('payments.edit',$urlschedule)
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment_medicines  $payment_medicines
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment_medicine $payment_medicine)
    {
        //
        $urlschedule=$payment_medicine->payment_id;
        $payment_medicine->delete();
        return redirect()->route('payments.edit',$urlschedule);
    }
}
