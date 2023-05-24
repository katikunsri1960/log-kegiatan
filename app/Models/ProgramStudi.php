<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prodi',
        'fakultas_id',
        'kode_prodi',
        'nama_program_studi',
        'nama_jenjang_pendidikan',
    ];

    public function fakultas() : belongTo
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id', 'id');
    }


}
