<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $karyawan = Karyawan::create([
            'name' => 'Syifa',
            'address' => 'Paris',
            'profesion' => 'Programmer',
            'date_of_birth' => '2007-08-16',
            'no_hp' => '087800657845',
        ]);
    }
}
