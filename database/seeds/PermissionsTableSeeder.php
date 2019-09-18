<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////Permisos///
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


        /////Roles/////
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' =>'Lista y navega todos los roles',
        ]);
        Permission::create([
            'name' => 'Ver detalle de los roles',
            'slug' => 'roles.show',
            'description' =>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Crear roles',
            'slug' => 'roles.create',
            'description' =>'Cea los roles de usuarios',
        ]);
        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' =>'Editar cualquiera de los roles',
        ]);
        Permission::create([
            'name' => 'Eliminar roles',
            'slug' => 'roles.destroy',
            'description' =>'Elimina cualquiera de los roles',
        ]);


        
        /////Productos/////
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description' =>'Lista y navega todos los productos',
        ]);
        Permission::create([
            'name' => 'Ver detalle de productos',
            'slug' => 'products.show',
            'description' =>'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name' => 'Crear productos',
            'slug' => 'products.create',
            'description' =>'Crear productos',
        ]);
        Permission::create([
            'name' => 'Editar productos',
            'slug' => 'products.edit',
            'description' =>'Editar cualquiera de los productos',
        ]);
        Permission::create([
            'name' => 'Eliminar productos',
            'slug' => 'products.destroy',
            'description' =>'Elimina cualquiera de los productos',
        ]);
    }
}
