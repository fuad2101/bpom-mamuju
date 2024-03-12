<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'nama' =>'Suliyanto SH.MH',
                'nip'=>'192168123456789',
                'pangkat'=>'Test',
                'golongan'=>'test',
                'jabatan'=>'test',
                'substansi'=>'test',
        ];
    }
}
