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
        return view('jobs.index', ['categories'=>$categories]);
    }

    public function show($id)

    {
       return view('jobs.show', ['id'=>$id]);
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

        return redirect('/');
    }
}
