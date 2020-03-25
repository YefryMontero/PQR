<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => '1114391757',
            'nombre' => 'Yefry Montero',
            'email' => 'yefry.montero@correounivalle.edu.co',
            'password' => bcrypt('pass123')
        ]);

        DB::table('usuario')->insert([
            'usuario' => '1114391000',
            'nombre' => 'Camilo Sarmiento',
            'email' => 'Camilo.Sarmiento@correounivalle.edu.co',
            'password' => bcrypt('pass123')
        ]);

        DB::table('usuario')->insert([
            'usuario' => '1114391001',
            'nombre' => 'Andres Sarmiento',
            'email' => 'Andres.Sarmiento@correounivalle.edu.co',
            'password' => bcrypt('pass123')
        ]);



        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1
        ]);
       DB::table('usuario_rol')->insert([
            'rol_id' => 3,
            'usuario_id' => 2
        ]);
       DB::table('usuario_rol')->insert([
            'rol_id' => 3,
            'usuario_id' => 3
        ]);

    }
}
