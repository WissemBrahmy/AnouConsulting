<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_news()
    {
       

        $news = DB::table('News')->paginate(2);


        return view("admin.news_admin",compact('news'));
    }

    public function actualites_home()
    {
       

        $news = DB::table('News')->paginate(2);


        return view("actualites",compact('news'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actualites');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\News
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $news=new News($data);
        if($request->hasFile('image')){

            $file=$request->file('image');
            $fileName=uniqid("img_").'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/actualites',$fileName);

            $news->image='/actualites/'.$fileName;

        }
        
        $news->save();
        return redirect()->route("admin.news_admin")->with('message','actualité publiée');
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
