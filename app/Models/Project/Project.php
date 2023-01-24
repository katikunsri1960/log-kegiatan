<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'progress',
        'status',
    ];

    // has many project teams
    public function projectTeams()
    {
        return $this->hasMany(ProjectTeam::class);
    }

    // has many users through project teams
    public function users()
    {
        return $this->hasManyThrough(User::class, ProjectTeam::class, 'project_id', 'id', 'id', 'user_id');
    }

    // has many project tasks
    public function projectTasks()
    {
        return $this->hasMany(ProjectTask::class);
    }

    // has many project task images through project tasks
    public function projectTaskImages()
    {
        return $this->hasManyThrough(ProjectTaskImage::class, ProjectTask::class, 'project_id', 'project_task_id', 'id', 'id');
    }

}
