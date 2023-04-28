<?php

namespace App\Http\Controllers;

use App\Http\Requests\coursecreateRequest;
use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function create(){
        return view('admins.pages.media.mediacreate');
    }
    public function store(coursecreateRequest $request){
       $course= course::create($request->validate());
        // return "succsses";
        

    }
}
