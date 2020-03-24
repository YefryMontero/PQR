<?php

use Illuminate\Database\Seeder;

class TablaPQRS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       DB::table('pqrs')->insert([
            'nombre' => 'Peticion',
            'prioridad' => 'Media',
        ]);   
         DB::table('pqrs')->insert([
            'nombre' => 'Queja',
            'prioridad' => 'Alta',
        ]); 
         DB::table('pqrs')->insert([
            'nombre' => 'Reclamo',
            'prioridad' => 'Alta',
        ]); 
         DB::table('pqrs')->insert([
            'nombre' => 'Sugerencia',
            'prioridad' => 'Baja',
        ]); 
    }
}
