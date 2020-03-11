<?php

namespace App\Http\Controllers;
use App\Request;
use App\Http\Requests\ClientSendRequest;
use Illuminate\Http\ClientSend;




class SendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $model)
    {
        return view('users.sendrequest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ClientSend $request
     * @param \App\Request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientSendRequest $request, Request $model)
    {
        $this->validate($request,[
            'date'=>'required',
            'rmno'=>'required',
            'college'=>'required',
            'equipment'=>'required',
            'propertynumber'=>'required',
            'quantity'=>'required',
            'service'=>'required'        
        ]);
        $reqs = new Request;

        $reqs->date = $request->input('date');
        $reqs->rmno = $request->input('rmno');
        $reqs->college = $request->input('college');
        $reqs->equipmet = $request->input('equipment');
        $reqs->propertynumber = $request->input('propertynumber');
        $reqs->quantity = $request->input('quantity');
        $reqs->stype = $request->input('service');
        
        $reqs->save();
        

        return redirect()->route('request')->with(__('Request successfully Sent.'));
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
