<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $careers = Career::latest()->filter(request(['tags', 'title', 'location', 'job_type', 'search']))->paginate(15);

        return view('careers.index', [
            'careers' => $careers,
            'search' => $search,
        ]);
    }

    public function dashboard()
    {

        $careers = Career::latest()->filter(request(['tags', 'title', 'location', 'job_type', 'search']))->simplePaginate(15);

        return view('careers.dashboard', [
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

        return redirect('/careers/dashboard');
    }

    public function edit(Career $career)
    {
        return view("careers.edit", [
            'career' => $career,
        ]);
    }

    public function update(Request $request, Career $career)
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

        if ($career->ownedBy(auth()->user())) {
            $career->update([
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'website' => $request->website,
                'company_name' => $request->company_name,
                'tags' => $request->tags,
                'job_type' => $request->job_type,
                'salary' => $request->salary,
            ]);
        } else {
            abort(401);
        }

        return redirect('/careers/dashboard');
    }

    public function destroy(Career $career)
    {

        if ($career->ownedBy(auth()->user())) {

            $career->delete();
        } else {
            abort(401);
        }

        return back();
    }


    public function show(Career $career)
    {
        return view("careers.show", [
            'career' => $career,
        ]);
    }
}
