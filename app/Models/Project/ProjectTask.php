<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function projectTaskImages()
    {
        return $this->hasMany(ProjectTaskImage::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
