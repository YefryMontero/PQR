<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TablaInconformidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inconformidades')->insert([
                'motivo' => 'Falta cargero',
                'usuario_id' => 1,
                'pqrs_id' => 1,
                'descripcion' => 'Creo que los cajeros no son suficientes',
                'estado' => 'Activo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);    
     DB::table('inconformidades')->insert([
                'motivo' => 'Daño de maquina',
                'usuario_id' => 1,
                'pqrs_id' => 1,
                'descripcion' => 'Por favor arreglar la maquina enfriadora de gaseosas',
                'estado' => 'Activo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]); 
    }
}
