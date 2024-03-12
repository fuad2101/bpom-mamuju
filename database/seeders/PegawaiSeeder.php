<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pegawai::factory()->create(
            [
                'nama' =>'Suliyanto SH.MH',
                'nip'=>'192168123456789',
                'pangkat'=>'Test',
                'golongan'=>'test',
                'jabatan'=>'test',
                'substansi'=>'test',

                ]
        );
    }
}
