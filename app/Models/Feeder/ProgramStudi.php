<?php

namespace App\Models\Feeder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $connection = 'pd_con';
    protected $table = 'program_studi';


}
