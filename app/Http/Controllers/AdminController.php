<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller 
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admins.pages.admin.loginadmin');
    }

    /**
     * Handle an authentication attempt for admin user.
     *
     */
    public function adminAuthentication(AdminRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);

        
    }
    
    
}
