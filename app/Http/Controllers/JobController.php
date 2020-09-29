<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use App\Category;
class JobController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $id = request('category');
     
        if(is_null($id) || $id == 0)
        {
            $jobs = job::all();
            return view('jobs.index', ['categories'=>$categories, 'jobs'=>$jobs]);
            
        }

        else 
        {
          
            $jobs = job::where('category_id', $id)->get();
            return view('jobs.index', ['categories'=>$categories, 'jobs'=>$jobs]);
            
        }
    }

    public function show($id)

    {
        $job = job::where('id', $id)->get();
       return view('jobs.show', ['jobs'=>$job]);
    }

    public function create()
    {
        $categories = Category::all();
       return view('jobs.create', ['categories'=>$categories]);
    }

    public function store()
    {

        $job = new job();

        $job->company = request('company');
        $job->category_id = request('category');
        $job->job_title = request('job_title');
        $job->description = request('description');
        $job->location = request('location');
        $job->salary = request('salary');
        $job->contact_user = request('contact_user');
        $job->contact_email = request('contact_email');

        $job->save();

        return redirect('jobs');
    }
}
