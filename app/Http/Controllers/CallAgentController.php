<?php

namespace App\Http\Controllers;

use App\Models\call_agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CallAgentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $call_agent=call_agent::latest()->paginate(10);
        return view('call_center.call_agent.allcall_agent',compact('call_agent'));
    }

    public function index2()
    {
        //
        $call_agent=call_agent::latest()->paginate(10);
        return view('call_center.call_agent.allcall_agent2',compact('call_agent'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $call_agent=call_agent::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $call_agent=call_agent::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $call_agent=call_agent::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $call_agent=call_agent::all();
        }
        return view('call_center.call_agent.allcall_agent',compact('call_agent'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('call_center.call_agent.addcall_agent')->with('success','Created Succssefuly');

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

            'login'=>'required',
            'agent_name'=>'required',

          ];
    
          $msgs=[
            'login.required'=>'Please Fill This Field',
            'agent_name.required'=>'Please Fill This Field',
 
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $call_agent =  call_agent::create([

       'user_id'=>Auth::id(),
       'agent_name'=>$request->agent_name,
       'login'=>$request->login,
       'phone'=>$request->phone


       
       ,]);
       return redirect()->route('call_agent.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\call_agent  $call_agent
     * @return \Illuminate\Http\Response
     */
    public function show(call_agent $call_agent)
    {
        //
        return view('call_center.call_agent.show',compact('call_agent'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\call_agent  $call_agent
     * @return \Illuminate\Http\Response
     */
    public function edit(call_agent $call_agent)
    {
        //
        return view('call_center.call_agent.editcall_agent',compact('call_agent'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\call_agent  $call_agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, call_agent $call_agent)
    {
        //
        $rules=[

            'login'=>'required',
            'agent_name'=>'required',

          ];
    
          $msgs=[
            'login.required'=>'Please Fill This Field',
            'agent_name.required'=>'Please Fill This Field',
 
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //

        $call_agent->update($request->all());
        return redirect()->route('call_agent.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\call_agent  $call_agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(call_agent $call_agent)
    {
        //
        $call_agent->delete();
        return redirect()->route('call_agent.index');
    }


}
