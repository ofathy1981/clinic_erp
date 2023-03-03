<?php

namespace App\Http\Controllers;

use App\Models\payment,App\Models\payment_service,App\Models\payment_medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment=payment::latest()->paginate(10);
        return view('Appointments.payment.allpayment',compact('payment'));
    }
    public function index2()
    {
        //
        $payment=payment::latest()->paginate(10);
        return view('Appointments.payment.allpayment2',compact('payment'));
    }
    public function search(Request $request)
    {
        //
        $patient_name=$request['patient_name']?? "";
        $pament_date=$request['pament_date']?? "";
        if($patient_name !=""){
            $payment=payment::where('patient_name','LIKE',$patient_name)->get();

        }
        elseif($pament_date != ""){
            $payment=payment::where('pament_date','LIKE',$pament_date)->get();

        }

        else{
            $payment=payment::all();
        }
        return view('Appointments.payment.allpayment',compact('payment'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Appointments.payment.addpayment')->with('success','Created Succssefuly');

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
            'cid'=>'required|numeric|',
            'pament_date'=>'required|date',
            'total'=>'required|numeric',
            
          ];
    
          $msgs=[
            'service_name.required'=>'Please Fill This Field',
            'service_name.max'=>'Max Limit Exceeded',
            'cid.required'=>'Please Fill This Field',
            // 'cid.max'=>'Max Limit Exceeded', 
            'cid.numeric'=>'Value must be number',  
            'pament_date.required'=>'Please Fill This Field',
            'pament_date.date'=>'PleaseEnter Valid date',
            'total.required'=>'Please Fill This Field',
            'total.numeric'=>'Please enter number',
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }

        //
        $payment =  payment::create([
            'patient_name'=>$request->patient_name,
            'cid'=>$request->cid,
            'pament_date'=>$request->pament_date,
            'total'=>$request->total,
            ]);

            foreach ($request->payment_service as $service) {
                $payment->payment_service()->save(
                    
                    new payment_service([ 
                        'service_name'=>$service['service_name'],
                        'service_price' => $service['service_price']])

                    );
                    
            }
            foreach ($request->payment_medicine as $service) {
                $payment->payment_medicine()->save(
                    
                    new payment_medicine([ 
                        'medicine_name'=>$service['medicine_name'],
                        'medicine_quantity' => $service['medicine_quantity'],
                        'unit_price' => $service['unit_price'],
                        'total' => $service['total'],
                        ])

                    );
                    
            }



            
            return redirect()->route('payments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
        return view('Appointments.payment.show',compact('payment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
        $id=$payment->id;
        // dd($schedule->id);
        $payment_service=payment_service::where('payment_id','=',$id)->get();
        $payment_medicine=payment_medicine::where('payment_id','=',$id)->get();


        return view('Appointments.payment.editpayment',compact(['payment','payment_service','payment_medicine']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
        $request->validate([
            'patient_name'=>'required'
            ] );
        $payment->update($request->all());
        return redirect()->route('payments.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
