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
                'nama' =>$this->faker->name(),
                'nip'=>$this->faker->unique()->safeEmail(),
                'pangkat'=>$this->faker->randomElement(['A','B','C']),
                'golongan'=>$this->faker->randomElement(['VII','VI','III']),
                'jabatan'=>'Pengawas Farmasi dan Makanan',
                'substansi'=>$this->faker->randomElement(['Infokom','Pengujian','Tata Usaha','Penindakan','Pemeriksaan']),
        ];
    }
}
