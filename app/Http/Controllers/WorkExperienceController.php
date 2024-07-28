<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function create()
    {
        return view('work-experience.create');
    }

    public function store(StoreRequest $request)
    {
        $formData = $request->validated();

        // saving....

        return back()->with('success', 'Work Experience added successfully');
    }
}
