<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use App\Models\User;
use App\Models\WorkExperience;
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

        // $experiences = DB::select('SELECT * FROM work_experiences LIMIT 1');
        // $experiences = DB::table('work_experiences')
        //     ->where(function ($query) {
        //         $query->where('to', '>=', '2024-01-01');
        //     })
        //     ->orWhere('to', '>=', '2023-01-01')
        //     ->get();

        // ->orderBy('company', 'asc')
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

        // $experiences = WorkExperience::where('work_experiences.id', 1)
        //     ->join('users as u2', 'u2.id', '=', 'work_experiences.user_id')
        //     ->where(function ($query) {
        //         $query->where('u2.id', 1);
        //     })
        //     ->join('users as u1', 'u1.id', '=', 'work_experiences.user_id')
        //     ->get();

        $query1 = WorkExperience::where('id', 1);

        $query2 = WorkExperience::where('id', 2)->union($query1)->get();

        dd($query2->toArray());

        return back()->with('success', 'Work Experience added successfully');
    }
}
