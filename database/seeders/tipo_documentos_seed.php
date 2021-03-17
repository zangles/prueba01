<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipo_documentos_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docuemntos = [
            '1' => 'DNI',
            '2' => 'PASAPORTE'
        ];

        foreach ($docuemntos as $id => $docuemnto) {
            DB::table('tipo_documentos')->insert([
                'id_tipo_documento' => $id,
                'tipo_documento' => $docuemnto,
            ]);
        }
    }
}
