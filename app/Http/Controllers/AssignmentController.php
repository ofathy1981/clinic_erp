<?php

namespace App\Http\Controllers;

use App\Models\assignment,App\Models\assign_contact,App\Models\assign_group,App\Models\contact,App\Models\contact_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assignment=assignment::latest()->paginate(10);
        return view('call_center.assignment.allassignment',compact('assignment'));
    }

    public function index2()
    {
        //
        $assignment=assignment::latest()->paginate(10);
        return view('call_center.assignment.allassignment2',compact('assignment'));
    }
    public function search(Request $request)
    {
        //
        $name=$request['name']?? "";
        $phone=$request['phone']?? "";
        $specialization=$request['specialization']?? "";
        if($name !=""){
            $assignment=assignment::where('name','LIKE',$name)->get();

        }
        elseif($phone != ""){
            $assignment=assignment::where('phone','LIKE',$phone)->get();

        }
        elseif($specialization !=""){
            $assignment=assignment::where('specialization','LIKE',$specialization)->get();
        }
        else{
            $assignment=assignment::all();
        }
        return view('call_center.assignment.allassignment',compact('assignment'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $assign_contact=contact::all();
        $assign_group=contact_group::all();

        return view('call_center.assignment.addassignment',compact('assign_contact','assign_group'))->with('success','Created Succssefuly');

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



            'agent_name'=>'required',
            'from'=>'required|date',
            'to'=>'required|date',
            'completness'=>'required',
            'assign_date'=>'required',
            
          ];
    
          $msgs=[
            'agent_name.required'=>'Please Fill This Field',
            'from.required'=>'Please Fill This Field',
            'from.date'=>'Please Enter valid date',
            'to.date'=>'Please Enter valid date',
            'to.required'=>'Please Fill This Field',
            'completness.required'=>'Please Fill This Field',
            'assign_date.required'=>'Please Fill This Field',

            


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
//
        $assignment =  assignment::create([
            'user_id' =>  Auth::id(),

       'agent_name'=>$request->agent_name,
       'from'=>$request->from,
       'to'=>$request->to,
       'completness'=>$request->completness,
       'assign_date'=>$request->assign_date,]);

       $contact = $request->input('contact', []);
       $group = $request->input('group', []);

       for ($i=0; $i < count($contact); $i++) {

       $assignment->assign_contact()->save(    
                new assign_contact([
        'contact_name' =>  $contact[$i] ,

    ]),);
}
       $assignment->assign_group()->save(
             new assign_group([
        'group_name' =>  $group[$i] ,

    ])

       );


       return redirect()->route('assignment.index');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(assignment $assignment)
    {
        //
        return view('call_center.assignment.show',compact('assignment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(assignment $assignment)
    {
        //
        return view('call_center.assignment.editassignment',compact('assignment'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assignment $assignment)
    {
        //
        $rules=[

            'agent_name'=>'required',
            'from'=>'required|date',
            'to'=>'required|date',
            'completness'=>'required',
            'assign_date'=>'required',
            
          ];
    
          $msgs=[
            'agent_name.required'=>'Please Fill This Field',
            'from.required'=>'Please Fill This Field',
            'from.date'=>'Please Enter valid date',
            'to.date'=>'Please Enter valid date',
            'to.required'=>'Please Fill This Field',
            'completness.required'=>'Please Fill This Field',
            'assign_date.required'=>'Please Fill This Field',

            


    
    
    
          ];
            $validator=Validator::make($request->all(),$rules,$msgs);
    
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
        //

        $assignment->update($request->all());
        return redirect()->route('assignment.index')
        ->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignment $assignment)
    {
        //
        $assignment->delete();
        return redirect()->route('assignment.index');
    }
}
