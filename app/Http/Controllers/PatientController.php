<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patient=patient::latest()->paginate(10);
        return view('Appointments.patient.allpatient',compact('patient'));
    }
    public function index2()
    {
        //
        $patient=patient::latest()->paginate(10);
        return view('Appointments.patient.allpatient2',compact('patient'));
    }

    public function search(Request $request)
    {
        //
        $patient_id=$request['patient_id']?? "";
        $patient_name=$request['patient_name']?? "";
        $patient_mobile=$request['patient_mobile']?? "";
        if($patient_id !=""){
            $patient=patient::where('cid','LIKE',$patient_id)->get();

        }
        elseif($patient_name != ""){
            $patient=patient::where('first_name','LIKE',$patient_name)->get();

        }
        elseif($patient_mobile !=""){
            $patient=patient::where('mobile','LIKE',$patient_mobile)->get();
        }
        else{
            $patient=patient::all();
        }
        return view('Appointments.patient.allpatient',compact('patient'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Appointments.patient.addpatient')->with('success','Created Succssefuly');
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

        'first_name'=>'required|max:250',
        'father_name'=>'required|max:250',
        'nationality'=>'required|max:250',
        'patient_type'=>'required|max:250',
        'social_case'=>'required|max:250',
        'mobile'=>'required|numeric|max:250',
        'cid'=>'required|numeric|max:12|unique:patients',
        'gender'=>'required',
        'date_of_birth'=>'required|date',
        'email'=>'required|email',
        'tel'=>'required|numeric',
        'address_area'=>'required',
        'address'=>'required',
        'blood_type'=>'required',
        'smoking'=>'required',
        'weight'=>'required|numeric',
        'length'=>'required|numeric',
        'known_us_from'=>'required',
        'job'=>'required',
        'work_address'=>'required',
        'case'=>'required',
        'file_number'=>'required',
        'has_allegric_to_medicine'=>'required',
        'credit_balance'=>'required|numeric',
        'debit_balance'=>'required|numeric',
      ];

      $msgs=[
        'first_name.required'=>'Please Fill This Field',
        'first_name.max'=>'Max Limit Exceeded',
        'father_name.required'=>'Please Fill This Field',
        'father_name.max'=>'Max Limit Exceeded',   
        'nationality.required'=>'Please Fill This Field',
        'nationality.max'=>'Max Limit Exceeded', 
        'patient_type.required'=>'Please Fill This Field',
        'patient_type.max'=>'Max Limit Exceeded',         
        'social_case.required'=>'Please Fill This Field',
        'social_case.max'=>'Max Limit Exceeded', 
        'mobile.required'=>'Please Fill This Field',
        'mobile.max'=>'Max Limit Exceeded', 
        'mobile.numeric'=>'Value must be number',
        'cid.required'=>'Please Fill This Field',
        'cid.max'=>'Max Limit Exceeded', 
        'cid.numeric'=>'Value must be number',  
        'cid.unique'=>'Value Already Exist',               
        'gender.required'=>'Please Fill This Field',
        'date_of_birth.required'=>'Please Fill This Field',
        'date_of_birth.date'=>'Enter Valid Date Format',
        'email.required'=>'Please Fill This Field',
        'email.date'=>'Enter Valid mail Format',      
        'tel.required'=>'Enter Valid mail Format',
        'address.required'=>'Please Fill This Field',
        'address_area.required'=>'Please Fill This Field',
        'blood_type.required'=>'Please Fill This Field',
        'smoking.required'=>'Please Fill This Field',
        'weight.required'=>'Please Fill This Field',
        'weight.numeric'=>'Value must be number', 
        'length.required'=>'Please Fill This Field',
        'length.numeric'=>'Value must be number', 
        'known_us_from.required'=>'Please Fill This Field',
        'work_address.required'=>'Please Fill This Field',
        'job.required'=>'Please Fill This Field',
        'case.required'=>'Please Fill This Field',
        'has_allegric_to_medicine'=>'Please Fill This Field',
        'credit_balance.required'=>'Please Fill This Field',
        'debit_balance.numeric'=>'Value must be number', 
        'file_number.required'=>'Please Fill This Field',
      


      ];
        $validator=Validator::make($request->all(),$rules,$msgs);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $patient =  patient::create([
            //'user_id' =>  Auth::id(),

            'first_name'=>$request->first_name,
            'father_name'=>$request->father_name,
            'nationality'=>$request->nationality,
            'patient_type'=>$request->patient_type,
            'file_number'=>$request->file_number,
            'social_case'=>$request->social_case,
            'mobile'=>$request->mobile,
            'cid'=>$request->cid,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'email'=>$request->email,
            'tel'=>$request->tel,
            'address_area'=>$request->address_area,
            'address'=>$request->address,
            'blood_type'=>$request->blood_type,
            'smoking'=>$request->smoking,
            'weight'=>$request->weight,
            'length'=>$request->length,
            'known_us_from'=>$request->known_us_from,
            'job'=>$request->job,
            'work_address'=>$request->work_address,
            'case'=>$request->case,
            'has_allegric_to_medicine'=>$request->has_allegric_to_medicine,
            'credit_balance'=>$request->credit_balance,
            'debit_balance'=>$request->debit_balance,
   
   
           ]);
           return redirect()->route('patient.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {
        //
        return view('Appointments.patient.show',compact('patient'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(patient $patient)
    {
        //
        // dd($patient->id);
        return view('Appointments.patient.editpatient',compact('patient'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patient $patient)
    {
        //
        $rules=[

            'first_name'=>'required|max:250',
            'father_name'=>'required|max:250',
            'nationality'=>'required|max:250',
            'patient_type'=>'required|max:250',
            'file_number'=>'required',
            'social_case'=>'required|max:250',
            'mobile'=>'required|numeric|max:250',
            'cid'=>'required|numeric|max:12|unique:patients',
            'gender'=>'required',
            'date_of_birth'=>'required|date',
            'email'=>'required|email',
            'tel'=>'required|numeric',
            'address_area'=>'required',
            'address'=>'required',
            'blood_type'=>'required',
            'smoking'=>'required',
            'weight'=>'required|numeric',
            'length'=>'required|numeric',
            'known_us_from'=>'required',
            'job'=>'required',
            'work_address'=>'required',
            'case'=>'required',
            'has_allegric_to_medicine'=>'required',
            'credit_balance'=>'required|numeric',
            'debit_balance'=>'required|numeric',
          ];
    
          $msgs=[
            'first_name.required'=>'Please Fill This Field',
            'first_name.max'=>'Max Limit Exceeded',
            'father_name.required'=>'Please Fill This Field',
            'father_name.max'=>'Max Limit Exceeded',   
            'nationality.required'=>'Please Fill This Field',
            'nationality.max'=>'Max Limit Exceeded', 
            'patient_type.required'=>'Please Fill This Field',
            'patient_type.max'=>'Max Limit Exceeded',         
            'social_case.required'=>'Please Fill This Field',
            'social_case.max'=>'Max Limit Exceeded', 
            'mobile.required'=>'Please Fill This Field',
            'mobile.max'=>'Max Limit Exceeded', 
            'mobile.numeric'=>'Value must be number',
            'cid.required'=>'Please Fill This Field',
            'cid.max'=>'Max Limit Exceeded', 
            'cid.numeric'=>'Value must be number',  
            'cid.unique'=>'Value Already Exist',               
            'gender.required'=>'Please Fill This Field',
            'date_of_birth.required'=>'Please Fill This Field',
            'date_of_birth.date'=>'Enter Valid Date Format',
            'email.required'=>'Please Fill This Field',
            'email.date'=>'Enter Valid mail Format',      
            'tel.required'=>'Enter Valid mail Format',
            'address.required'=>'Please Fill This Field',
            'address_area.required'=>'Please Fill This Field',
            'blood_type.required'=>'Please Fill This Field',
            'smoking.required'=>'Please Fill This Field',
            'weight.required'=>'Please Fill This Field',
            'weight.numeric'=>'Value must be number', 
            'length.required'=>'Please Fill This Field',
            'length.numeric'=>'Value must be number', 
            'known_us_from.required'=>'Please Fill This Field',
            'work_address.required'=>'Please Fill This Field',
            'job.required'=>'Please Fill This Field',
            'case.required'=>'Please Fill This Field',
            'has_allegric_to_medicine'=>'Please Fill This Field',
            'credit_balance.required'=>'Please Fill This Field',
            'debit_balance.numeric'=>'Value must be number',       
            'file_number.required'=>'Please Fill This Field',

    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        // $request->validate([
        //     'name'=>'required'
        //     ] );
        // dd($patient);
        $patient->update($request->all());
        return redirect()->route('patient.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient)
    {

        //

        $patient->delete();
        return redirect()->route('patient.index2');
    }
}
