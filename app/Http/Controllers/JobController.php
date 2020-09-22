<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        return view('jobs');
    }

    public function show($id)
    {
       return view('details', ['id'=>$id]);
    }
}
