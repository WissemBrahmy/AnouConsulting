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

       public function edit_admin()
       {
           return view('admin.edit_profil');
       }
       public function edit_profil(Request $request)
       {
  
        $admin = Admin::find(Auth::user()->id);
      $admin->name = $request->name;
      $admin->email = $request->email;
      
          $admin->password= bcrypt($request->password);
      

      $admin->save();
      return redirect('admin/edit')->with('success', "informations ont été modifiées avec success.");

  }
 
       
    
    public function destroy($id)
    {
        $admins = Admin::findOrFail($id);
        $admins->delete();

        return redirect('admin/liste_admins')->with('message', 'admin a été bloqué');
    
    }
}
