<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeFacturesRequest;
use App\TypeFacture;
use Illuminate\Http\Request;

class TypeFactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dane = TypeFacture::orderBy('id','ASC')->paginate(10);

        return view('typefacture.index', compact('dane'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typefacture.create', compact('dane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TypeFacture::create($request->all());
        return redirect()->route('typefacture.index');
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
        $type = TypeFacture::find($id);
        return view('typefacture.edit', compact('type'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeFacturesRequest $request, $id)
    {
        TypeFacture::find($id)->update($request->all());
        return redirect()->route('typefacture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeFacture::find($id)->delete();
        return redirect()->route('typefacture.index');
    }
}
