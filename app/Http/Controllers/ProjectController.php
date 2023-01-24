<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project\Project;
use App\Models\Project\ProjectTeam;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::select('id', 'name', 'progress', 'status')->get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $users = User::select('id', 'name')->get();
        return view('project.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'name' => 'required',
            'user_id' => 'nullable',
            'user_id.*' => 'exists:users,id',
        ]);
        //use transaction to make sure all data is saved
        DB::transaction(function () use ($data) {
            $project = Project::create([
                'name' => $data['name'],
                'progress' => 0,
                'status' => 1,
            ]);

            foreach ($data['user_id'] as $user_id) {
                ProjectTeam::create([
                    'project_id' => $project->id,
                    'user_id' => $user_id,
                ]);
            }
        });
        // return with success message
        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Project::select('id', 'name', 'progress', 'status')->findOrFail($id);
        return view('project.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        $data = Project::select('id', 'name', 'progress', 'status')->findOrFail($id);
        $users = User::select('id', 'name')->get();
        return view('project.edit', compact('data', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'name' => 'required',
            'progress' => 'required|numeric|min:0|max:100',
            'user_id' => 'nullable',
            'user_id.*' => 'exists:users,id',
        ]);
        //use transaction to make sure all data is saved
        DB::transaction(function () use ($data, $id) {
            $project = Project::findOrFail($id);

            if ($data['progress'] == 100) {
                $status = 2;
            } else {
                $status = 1;
            }

            $project->update([
                'name' => $data['name'],
                'progress' => $data['progress'],
                'status' => $status,
            ]);

            $project->projectTeams()->delete();

            foreach ($data['user_id'] as $user_id) {
                ProjectTeam::create([
                    'project_id' => $project->id,
                    'user_id' => $user_id,
                ]);
            }
        });
        // return with success message
        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $project = Project::findOrFail($id);

        //use transaction to make sure all data is deleted
        DB::transaction(function () use ($project) {
            $project->projectTeams()->delete();
            $project->delete();
        });
        // return with success message
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }
}
