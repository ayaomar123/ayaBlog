<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'category-list',
            'category-create',
            'category-edit',
            'category-delete',

            'article-list',
            'article-create',
            'article-edit',
            'article-delete',

            'page-list',
            'page-create',
            'page-edit',
            'page-delete',

            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',

            'setting-list',
            'setting-create',
            'setting-edit',
            'setting-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
