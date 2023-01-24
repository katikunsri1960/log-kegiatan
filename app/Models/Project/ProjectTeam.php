<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'user_id',
    ];

    // belongs to project
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    // belongs to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
