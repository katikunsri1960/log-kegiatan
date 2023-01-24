<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project\Project;
// use App\Models\Project\ProjectTeam;

class MyprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $projects = Project::select('id', 'name', 'progress', 'status')
            ->whereHas('projectTeams', function ($query) use ($user) {
                $query->where('user_id', $user);
            })
            ->get();
        return view('myproject.index', compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('myproject.show', compact('project'));
    }

}
