<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
