<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;


class MemosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos=Memo::all();
        return view('memo.index')->with('memos',$memos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memo=new Memo();
        $memo->title=$request->title;
        $memo->description=$request->descri;
        $memo->save();
        return redirect('/memo');
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
        $memo=Memo::find($id);
        return view('memo.edit')->with('memo',$memo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $memo=Memo::find($request->id);
        $memo->title = $request->title;
        $memo->description =$request->descri;
        $memo->save();
        return redirect('/memo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memo=Memo::find($id);
        $memo->delete();
        return redirect('/memo');
    }
}
