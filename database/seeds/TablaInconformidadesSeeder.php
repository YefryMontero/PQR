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
                'usuario_id' => 2,
                'pqrs_id' => 1,
                'descripcion' => 'Creo que los cajeros no son suficientes',
                'estado' => 'Activo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);  

     DB::table('inconformidades')->insert([
                'motivo' => 'Falta mercancia',
                'usuario_id' => 2,
                'pqrs_id' => 1,
                'descripcion' => 'No surten lus estantes',
                'estado' => 'Activo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);  
        DB::table('inconformidades')->insert([
                'motivo' => 'Falta mercancia',
                'usuario_id' => 3,
                'pqrs_id' => 1,
                'descripcion' => 'No surten lus estantes',
                'estado' => 'Activo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    
     DB::table('respuestas')->insert([
                'usuario_id' => 1,
                'descripcion' => 'Estamos en eso , en ampliar el lugar para tu mejor servicio',
                'inconformidad_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]); 
    
     DB::table('respuestas')->insert([
                'usuario_id' => 2,
                'descripcion' => 'Que bueno',
                'inconformidad_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]); 
     
 }
}
