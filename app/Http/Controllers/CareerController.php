<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {

        $careers = Career::latest()->filter(request(['tags', 'title', 'location', 'job_type', 'search']))->paginate(15);

        return view('careers.index', [
            'careers' => $careers,
        ]);
    }

    public function create()
    {
        return view("careers.create");
    }

    public function save(Request $request)
    {

        $this->validate($request, [
            'title' => ['required', 'max:20'],
            'description' => ['required'],
            'location' => ['required'],
            'website' => ['max:100'],
            'company_name' => ['required'],
            'tags' => ['required'],
            'job_type' => ['required', 'max:50'],
            'salary' => [''],
        ]);

        $request->user()->careers()->create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'website' => $request->website,
            'company_name' => $request->company_name,
            'tags' => $request->tags,
            'job_type' => $request->job_type,
            'salary' => $request->salary,
        ]);

        return redirect('/careers');
    }

    public function edit()
    {
        return view("careers.edit");
    }

    public function update()
    {
        return view("careers.index");
    }

    public function destroy()
    {
        return view("careers.index");
    }
}
