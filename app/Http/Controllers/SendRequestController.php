<?php

namespace WmsuSRSS\Http\Controllers;
use WmsuSRSS\Request;
use WmsuSRSS\Http\Requests\ClientSendRequest;
use Illuminate\Http\ClientSend;


use Illuminate\Http\Request as HttpRequest;

class SendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $model)
    {
        return view('users.sendrequest', ['requests' => $model->paginate(5)]);
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
     * @param  \WmsuSRSS\Http\Requests\ClientSend $request
     * @param \WmsuSRSS\Request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        $this->validate($request,[
            'date'=>'required',
            'rmno'=>'required',
            'college'=>'required',
            'equipment'=>'required',
            'propertynumber'=>'required|unique:requests,propertynumber',
            'quantity'=>'required',
            'service'=>'required',        
        ]);
        $reqs = new Request();

        $reqs->date = $request->input('date');
        $reqs->rmno = $request->input('rmno');
        $reqs->college = $request->input('college');
        $reqs->equipment = $request->input('equipment');
        $reqs->propertynumber = $request->input('propertynumber');
        $reqs->quantity = $request->input('quantity');
        $reqs->service = $request->input('service');
        
        $reqs->save();
        

        return redirect()->route('Request')->withstatus(__('Request successfully Sent.'));
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
