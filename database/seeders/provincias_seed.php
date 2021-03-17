<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provincias_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = [
            '1'=>'CABA',
            '2' => 'Buenos Aires',
            '3' => 'Cordoba',
            '4' => 'Mendoza',
            '5' => 'San Juan',
            '6' => 'San Luis',
            '7' => 'Santa Fe',
            '8' => 'La Pampa',
            '9' => 'Corrientes',
            '10' => 'Entre Rios'
        ];

        foreach ($provincias as $id => $provincia) {
            DB::table('provincias')->insert([
                'id_provincia' => $id,
                'provincia' => $provincia,
            ]);
        }

    }
}
