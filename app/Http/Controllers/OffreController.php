<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Offre;
use App\Postulation;
use App\Http\Controllers\Controller;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offres_home()
    {
     
        $off= DB::table('Offres')->orderBy('created_at','desc')->paginate(3);


        return view("offres",compact('off'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postule_offres($id)
    {
        $offre = Offre::where('id', $id)->firstOrFail();
        return view('postule_offre', compact('offre'));
    }
    public function edit_offre($id)
    {
        $offre = Offre::where('id', $id)->firstOrFail()->orderBy('created_at','desc');
        return view('admin.edit_offre', compact('offre'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index_offres()
    {
       

        $off= DB::table('Offres')->orderBy('created_at','desc')->paginate(2);


        return view("admin.offres_admin",compact('off'));
       

    }
    public function store(Request $request)
    {
        $data=$request->all();
        $offre=new Offre($data);
       
        $offre->save();
        return redirect()->route("index_offres")->with('success','offres publiée');
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
        
        $data=Offre::findOrFail($id);  
     $data->update($request->all());
     $data->save();
     return redirect('admin/index_offres')->with('success', 'offre modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $offre = Offre::findOrFail($id);
        $offre->delete();

        return redirect('admin/index_offres')->with('success', 'offre a été supprimée');
    }
}
