<?php

namespace App\Http\Controllers;

use App\Models\medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicine=medicine::latest()->paginate(10);
        return view('medicine.home',compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medicine.addmedicine')->with('success','Created Succssefuly');

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
        $medicine =  medicine::create([
            'medicine_name'=>$request->medicine_name,
            'medicine_category'=>$request->medicine_category,
            'medicine_stock'=>$request->medicine_stock,
           'expire_date'=>$request->expire_date,
           'unit_price'=>$request->unit_price,
            'reorder_point'=>$request->reorder_point,
            ]);
            return redirect()->route('medicine.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(medicine $medicine)
    {
        //
        return view('medicine.show',compact('medicine'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(medicine $medicine)
    {
        //
        return view('medicine.edit',compact('medicine'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicine $medicine)
    {
        //

        $request->validate([
            'medicine_name'=>'required'
            ] );
        $medicine->update($request->all());
        return redirect()->route('medicine.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicine $medicine)
    {
        //
        $medicine->delete();
        return redirect()->route('medicine.index');
    }
}
