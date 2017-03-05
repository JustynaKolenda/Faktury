<?php

namespace App\Http\Controllers;

use App\FirmAdress;
use App\Http\Requests\FirmAdressesRequest;
use Illuminate\Http\Request;

class FirmAdressController extends Controller
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
        $dane = FirmAdress::orderBy('id','ASC')->paginate(10);
        return view('firmadress.index', compact('dane'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firmadress.create', compact('dane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FirmAdress::create($request->all());
        return redirect()->route('firmadress.index');
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
        $firmadress = FirmAdress::find($id);
        return view('firmadress.edit', compact('firmadress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FirmAdressesRequest $request, $id)
    {
        FirmAdress::find($id)->update($request->all());
        return redirect()->route('firmadress.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FirmAdress::find($id)->delete();
        return redirect()->route('firmadress.index');
    }
}
