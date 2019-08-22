<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;
use Paginator;
use Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){
        
    }
    public function getallAdmin(){
       
        $admins=Admin::where('role',1)->paginate(5);

        return view('admin.liste_admins')->with("admins",$admins);
       }
      
    
    public function destroy($id)
    {
        $admins = Admin::findOrFail($id);
        $admins->delete();

        return redirect('admin/liste_admins')->with('message', 'admin a été bloqué');
    
    }
}
