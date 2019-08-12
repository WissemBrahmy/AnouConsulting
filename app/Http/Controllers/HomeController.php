<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   
    public function home_admin()
    {
        return view('admin.home_admin');
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
		
		return view('actualites');
    }
    public function offres()
	{
		
		return view('offres');
	}
}
