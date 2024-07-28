<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // $experiences = DB::select('SELECT * FROM work_experiences LIMIT 1');
        $experiences = DB::table('work_experiences')
            ->where('id', 1)
            ->orderBy('company', 'asc')
            ->get();

        // ->chunk(1000, function ($works) {
        //
        // });
        // ->exists();
        // ->groupBy(['company', 'is_current'])
        // ->selectRaw('COUNT(company) as total')
        // ->selectRaw('company as name')
        // ->whereRaw('id = ?', [2])
        // ->find(1);
        // ->where('id', 1)
        // ->first();
        // ->toSql();
        // ->get();
        // ->where('company', '=', 'Kshlerin-Ullrich')
        // ->whereNotLike('')
        // ->whereLike('company', '%Kshlerin-Ullrich%')
        // ->where('company', 'like', '%Kshlerin-Ullrich%');

        dd($experiences);

        return back()->with('success', 'Work Experience added successfully');
    }
}
