<?php

namespace App\Http\Controllers;

use App\FirmSender;
use App\Http\Requests\FirmSendersRequest;
use Illuminate\Http\Request;

class FirmSenderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dane = FirmSender::orderBy('id','ASC')->paginate(10);
        return view('firmsender.index', compact('dane'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firmsender.create', compact('dane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FirmSender::create($request->all());
        return redirect()->route('firmsender.index');
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
        $firmsender = FirmSender::find($id);
        return view('firmsender.edit', compact('firmsender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FirmSendersRequest $request, $id)
    {
        FirmSender::find($id)->update($request->all());
        return redirect()->route('firmsender.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FirmSender::find($id)->delete();
        return redirect()->route('firmsender.index');
    }
}
