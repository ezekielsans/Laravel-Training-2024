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

        // $query1 = WorkExperience::whereIn('id', [1, 3]);

        // $query2 = WorkExperience::where('id', 2)->union($query1)->get();

        // dd($query2->toArray());

        $formData = $request->validated();

        // WorkExperience::create($formData);

        // WorkExperience::insert([
        //     [
        //         'user_id' => 1,
        //         'company' => 'Kshlerin-Ullrich',
        //         'from' => '2021-01-01',
        //         'to' => '2023-01-01',
        //         'is_current' => 0,
        //         'position' => 'Product Manager',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'user_id' => 2,
        //         'company' => 'Kshlerin-Ullrich',
        //         'from' => '2023-01-01',
        //         'to' => '2024-01-01',
        //         'is_current' => 1,
        //         'position' => 'Product Manager',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);

        $experience = new WorkExperience();
        $experience->user_id = $formData['user_id'];
        $experience->company = $formData['company'];
        $experience->from = $formData['from'];
        $experience->to = $formData['to'];
        $experience->position = $formData['position'];
        $experience->save();

        // $experience = WorkExperience::where('id', 24)->update([
        //     'company' => 'Updated Company Name'
        // ]);

        // $experience = WorkExperience::find(24);
        // $experience->company = 'Inventive Media';
        // $experience->save();

        // $experience = WorkExperience::truncate();

        // dd($experience);

        return back()->with('success', 'Work Experience added successfully');
    }

    public function edit(WorkExperience $model)
    {
        // $experience = WorkExperience::find($id);

        return view('work-experience.edit', ['experience' => $model]);
    }

    public function update(Request $request, WorkExperience $model)
    {
        $request->merge(['user_id' => $model->user_id]);

        $formData = $request->validate([
            'user_id' => ['required', 'integer'],
            'company' => ['required', 'string', 'max:50'],
            'from' => ['required', 'date'],
            'to' => ['nullable', 'date', 'after:from'],
            'position' => ['required', 'string', 'max:50'],
        ]);

        $model->update($formData);

        return back()->with('success', 'Work Experience updated successfully');
    }
}
