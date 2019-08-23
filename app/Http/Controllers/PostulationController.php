<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Postulation;
use App\Offre;
use App\Http\Controllers\Controller;
class PostulationController extends Controller
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
    public function show_candidatures($id)
    {
        $offre= Offre::where('id',$id)->first();
        
        $postulation = Postulation::where('id_offre',$offre->id)->orderBy('created_at','desc')->paginate(2);
        return view('admin.show_candidatures')->with('postulation',$postulation)->with('offre',$offre);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $postulation=new Postulation($data);
        if($request->hasFile('cv')){

            $file=$request->file('cv');
            $fileName=uniqid("cv_").'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/postulations',$fileName);

            $postulation->cv='/postulations/'.$fileName;

        }
        
        $postulation->save();
        return redirect()->route("offres")->with('message','Candidature a été envoyée');
  
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
        {
            Postulation::destroy($id);
            return redirect()->back()->with('message', 'Candidature a été retirée');
            //
        }
    }
}
