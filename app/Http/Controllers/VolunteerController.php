<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Volunteer;
use Input;
class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers=Volunteer::join('users','users.id','=','volunteer.id')
        ->join('event','event.id','=','volunteer.event_id')
        ->get()
        ;
  
        return view('volunteers',compact('volunteers'));
    }

    public function single($user_id)
    {
        $volunteers=Volunteer::join('users','users.id','=','volunteer.id')
        ->join('event','event.id','=','volunteer.event_id')
        ->where('volunteer.user_id',$user_id)
        ->orderBy('volunteer.created_at','DESC')
        ->select('event.title','volunteer.created_at')
        ->get()
        ;
  
        return response()->json(['status'=>'success','data'=>$volunteers]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $does_exist=Volunteer::where('user_id',$request->user_id)
        ->where('event_id',$request->event_id)
        ->first();
       
        if(sizeof((array)$does_exist)>0){
            return response()->json(['status'=>'notok']);
        }
        try {
                Volunteer::create(Input::except('_token'));
            return response()->json(['status'=>'ok']);
        } catch (\Exception $e) {
            return response()->json(['status'=>'notok','message'=>$e->getMessage()]);
        }  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
