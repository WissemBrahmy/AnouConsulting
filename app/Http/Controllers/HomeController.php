<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;
use App\Offre;
use App\Message;
use App\Admin;
use App\Candidature;
use App\Postulation;
use Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /* admin */

    public function run()
    {
        try
        {
        Admin::create([
            'name' => 'Abderrahman Anou',
            'email' => 'anouma2@anou-dsi.eu',
            'password' => bcrypt('00adminanou++'),
            'role' => 2
        ]);
        return redirect('admin/login')->with('message','Compte super ADMINISTRATEUR a été créé avec succès veuillez-vous connecter.');
        }
        catch (\Exception $ex) 
        {
           
                return abort(404);
        }
       
    
    }
   
    public function home_admin()
    {
      
       

       
        $data = [
        'offres' => Offre::all()->count(),
        'candidatures' => Candidature::all()->count(),
        'messages' => Message::all()->count(),
        'postulation' => Postulation::all()->count(),
        'news' => News::all()
        ]; 
        return view('admin.home_admin')->with($data);
    
  

    }
    public function offres_admin()
    {
        return view('admin.offres_admin');
    }
    public function news_admin()
    {
        return view('admin.news_admin');
    }
    public function candidatures_admin()
    {
        return view('admin.candidatures_admin');
    }
    public function messages_admin()
    {
        return view('admin.messages_admin');
    }
/* user */
    public function index()
    {
        return view('index');
    }
    public function contact()
	{
		
		return view('contact');
	}
    public function apropos()
	{
		
		return view('apropos');
    }
    public function services()
	{
		
		return view('services');
    }
    public function equipes()
	{
		
		return view('equipes');
    }
    public function actualites()
	{
        
        


        return view("actualites");
		
		
    }
    public function offres()
	{
		
		return view('offres');
    }
    

    public function listeoffres(Request $request)
	{
        
        $region=($request->region)?$request->region:"0";
        $domaine=($request->domaine)?$request->domaine:"0";
        $niveau=($request->niveau)?$request->niveau:"0";
        
        
  /* 1er if */
        if(($domaine=="0")&&($niveau=="0")){

            if($region=="0"){
        
            $offres=Offre::orderBy('id','desc')->paginate(2);
            $count=Offre::count();
        }else{
        
            $offres=Offre::where("region",$region)->orderBy('id','desc')->paginate(3);
        $count=Offre::where("region",$region)->count();
        
        }
            
        }
        /* end 1er if */

         /* 2eme if */
        if(($domaine!="0")&&($niveau=="0")){
        
            if($region=="0"){
            $offres=Offre::where("domaine","LIKE",$domaine)->orderBy('id','desc')->paginate(3);
        
             //$count=Offre::where("domaine","LIKE",$domaine)->count();
            }
             else{
            $offres=Offre::where("region",$type)->where("domaine","LIKE",$domaine)->orderBy('id','desc')->paginate(3);
            //$count=Offre::where("region",$type)->where("domaine","LIKE",$domaine)->count();
        }
        
        }

         /* end 2eme if */

        /* 3eme if */
        if(($domaine=="0")&&($niveau!="0")){
               if($region=="0"){
            $offres=Offre::where("niveau",$niveau)->orderBy('id','desc')->paginate(3);
            //$count=Offre::where("niveau",$niveau)->count();
        }
            else{
            $offres=Offre::where("region",$region)->where("niveau",$niveau)->orderBy('id','desc')->paginate(3);
               // $count=Offre::where("region",$region)->where("niveau",$niveau)->count();
            }
        }
        /* end 3eme if */

            /*  4eme if */
        if(($domaine!="0")&&($niveau!="0")){
        
               if($region=="0"){
            $offres=Offre::where("domaine","LIKE",$domaine)->where("niveau",$niveau)->orderBy('id','desc')->paginate(3);
            //$count=Offre::where("domaine","LIKE",$domaine)->where("niveau",$niveau)->count();
        }
            else{
            $offres=Offre::where("region",$region)->where("domaine","LIKE",$domaine)->where("niveau",$niveau)->orderBy('id','desc')->paginate(3);
                //$count=Offre::where("region",$region)->where("domaine","LIKE",$domaine)->where("niveau",$niveau)->count();
            }
        
        }
        
        return view("liste_offres")->with("offres",$offres)->with("niveau",$niveau)->with("region",$region)->with("region",$region);
        }

         /* end 4eme if */
       


    

}
