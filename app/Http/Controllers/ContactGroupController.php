<?php

namespace App\Http\Controllers;

use App\Models\contact_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class ContactGroupController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact_group=contact_group::latest()->paginate(10);
        return view('call_center.contact_group.allcontact_group',compact('contact_group'));
    }

    public function index2()
    {
        //
        $contact_group=contact_group::latest()->paginate(10);
        return view('call_center.contact_group.allcontact_group2',compact('contact_group'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $contact_group=contact_group::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $contact_group=contact_group::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $contact_group=contact_group::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $contact_group=contact_group::all();
        }
        return view('call_center.contact_group.allcontact_group',compact('contact_group'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('call_center.contact_group.addcontact_group')->with('success','Created Succssefuly');

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


            'group_name'=>'required',

          ];
    
          $msgs=[
            'group_name.required'=>'Please Fill This Field',

          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $contact_group =  contact_group::create([

       'user_id'=>Auth::id(),
       'group_name'=>$request->group_name

       
       ,]);
       return redirect()->route('contact_group.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact_group  $contact_group
     * @return \Illuminate\Http\Response
     */
    public function show(contact_group $contact_group)
    {
        //
        return view('call_center.contact_group.show',compact('contact_group'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact_group  $contact_group
     * @return \Illuminate\Http\Response
     */
    public function edit(contact_group $contact_group)
    {
        //
        // $contact_group=contact_group::where('id','=',$id)->first();
        // dd($contact_group);
        return view('call_center.contact_group.editcontact_group',compact('contact_group'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact_group  $contact_group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact_group $contact_group)
    {
        //
        $rules=[


            'group_name'=>'required',

          ];
    
          $msgs=[
            'group_name.required'=>'Please Fill This Field',

          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //

        $contact_group->update(
            
            $request->all()
        
        );
    
        return redirect()->route('contactgroup.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact_group  $contact_group
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact_group $contact_group)
    {
        //
        $contact_group->delete();
        return redirect()->route('contact_group.index');
    }
}
