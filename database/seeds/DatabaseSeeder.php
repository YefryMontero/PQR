<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permiso',
            'usuario',
            'usuario_rol',
            'pqrs',
            'inconformidades'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(TablaRolSeeder::class); 
        $this->call(TablaPermisoSeeder::class);
        $this->call(UsuarioAdministradorSeeder::class);
        $this->call(TablaPQRS::class); 
        $this->call(TablaInconformidadesSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
