<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function index(){
       return view('admin.admin_login');
    }
    public function login(Request $request){

        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('admin.dashboard')->with('success', 'Admin login successfully');
        }else{
            return back()->with('error', 'Invaild email or password');
        }
    }
    public function dashboard(){
        return view('admin.index');
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('success', 'Admin logout successfully');
    }
}
