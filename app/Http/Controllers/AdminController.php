<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\AdminModel;

class AdminController extends Controller 
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admins.pages.admin.loginadmin');
    }

    /**
     * Handle an authentication attempt for admin user.
     *
     */
    public function adminAuthentication(Request $request)
    {

    //     if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
    //         return "success";
    //     }else{
    //         return "Wrong Credentials";
    //     }
    //     die;
    // }
    $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboardadmin');
        }
        else{
            return  redirect()->intended('adminlogin');
        }
    
    
}
}
