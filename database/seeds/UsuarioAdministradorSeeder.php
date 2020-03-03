<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'YeMontero',
            'nombre' => 'Yefry Montero',
            'email' => 'yefry.montero@correounivalle.edu.co',
            'password' => bcrypt('pass123')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1
        ]);
       

    }
}
