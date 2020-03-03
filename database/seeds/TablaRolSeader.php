<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablaRolSeeder extends Seeder
{
    public function run()
    {
        $rols = [
            'administrador',
            'Empleado',
            'Cliente',
            'Secretaria'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

    }
}