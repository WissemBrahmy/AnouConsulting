<?php

namespace App\Http\Controllers;
use App\Candidature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data=$request->all();
        $candidature=new Candidature($data);
        if($request->hasFile('cv')){

            $file=$request->file('cv');
            $fileName=uniqid("cv_").'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/files',$fileName);

            $candidature->cv='/files/'.$fileName;

        }
        if($request->hasFile('lm')){

            $file=$request->file('lm');
            $fileName=uniqid("lm_").'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/files',$fileName);

            $candidature->lm='/files/'.$fileName;

        }
        $candidature->save();
        return redirect()->route("offres")->with('message','candidature envoyée');
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
