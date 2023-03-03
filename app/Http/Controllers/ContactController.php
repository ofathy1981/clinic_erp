<?php

namespace App\Http\Controllers;

use App\Models\contact,App\Models\contact_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact=contact::latest()->paginate(10);
        return view('call_center.contact.allcontact',compact('contact'));
    }

    public function index2()
    {
        //
        $contact=contact::latest()->paginate(10);
        return view('call_center.contact.allcontact2',compact('contact'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $contact=contact::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $contact=contact::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $contact=contact::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $contact=contact::all();
        }
        return view('call_center.contact.allcontact',compact('contact'));
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
        return view('call_center.contact.addcontact',compact('contact_group'))->with('success','Created Succssefuly');

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

            'name'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'group'=>'required',
            'file_number'=>'required'

          ];
    
          $msgs=[
            'file_number.required'=>'Please Fill This Field',
            'name.required'=>'Please Fill This Field',
            'group.required'=>'Please Fill This Field',
            'phone.required'=>'Please Fill This Field',
            'gender.required'=>'Please Fill This Field',
   
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $contact =  contact::create([

       'user_id'=>Auth::id(),
       'name'=>$request->name,
       'address'=>$request->address,
       'phone'=>$request->phone,
       'gender'=>$request->gender,
       'group'=>$request->group,
       'file_number'=>$request->file_number

       
       ,]);
       return redirect()->route('contact.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
        return view('call_center.contact.show',compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
        return view('call_center.contact.editcontact',compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
        $rules=[

            'name'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'group'=>'required',
            'file_number'=>'required'

          ];
    
          $msgs=[
            'file_number.required'=>'Please Fill This Field',
            'name.required'=>'Please Fill This Field',
            'group.required'=>'Please Fill This Field',
            'phone.required'=>'Please Fill This Field',
            'gender.required'=>'Please Fill This Field',
   
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //

        $contact->update($request->all());
        return redirect()->route('contact.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
        $contact->delete();
        return redirect()->route('contact.index');
    }


}
