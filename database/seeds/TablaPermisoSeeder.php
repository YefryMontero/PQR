<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permiso;

class TablaPermisoSeeder extends Seeder
{
    public function run()
    {
        // factory(Permiso::class)->times(50)->create();
        DB::table('permiso')->insert([
            'nombre' => 'Realizar PQR',
            'slug' => 'realizar-pqr',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar PQR',
            'slug' => 'Actualizar-pqr',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar PQR',
            'slug' => 'eliminar-pqr',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar PQR',
            'slug' => 'listar-pqr',
        ]);


    }
}
