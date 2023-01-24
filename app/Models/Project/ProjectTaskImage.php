<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTaskImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_task_id',
        'path',
    ];

    public function projectTask()
    {
        return $this->belongsTo(ProjectTask::class);
    }

    
}
