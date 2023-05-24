<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = DB::connection('pd_con')->table('fakultas')->select('nama_fakultas')->get()->toArray();
        $fakultas = array_column($fakultas, 'nama_fakultas');

        foreach ($fakultas as $fakultas) {
            DB::table('fakultas')->insert([
                'nama_fakultas' => $fakultas,
            ]);
        }
    }
}
