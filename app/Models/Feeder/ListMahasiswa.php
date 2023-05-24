<?php

namespace App\Models\Feeder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListMahasiswa extends Model
{
    use HasFactory;
    protected $connection = 'pd_con';

    protected $table = 'list_mahasiswa';
    protected $primaryKey = null;
    public $timeStamps = false;
    public $incrementing = false;
}
