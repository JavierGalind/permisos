<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\src\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' =>'Lista y navega todos los usuarios',
        ]);
        Permission::create([
            'name' => 'Ver detalle de usuarios',
            'slug' => 'users.show',
            'description' =>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' =>'Editar cualquiera de los usuarios',
        ]);
        Permission::create([
            'name' => 'Eliminar Usuariosa usuarios',
            'slug' => 'users.destroy',
            'description' =>'Elimina cualq1uiera de los usuarios',
        ]);
    }
}
