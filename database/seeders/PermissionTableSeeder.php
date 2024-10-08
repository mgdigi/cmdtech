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
            [
                'name' => 'role',
                'title' => 'Role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'role-add',
                'title' => 'Role Add',
                'guard_name' => 'web',
            ],
            [
                'name' => 'role-list',
                'title' => 'Role List',
                'guard_name' => 'web',
            ],
            [
                'name' => 'permission',
                'title' => 'Permission',
                'guard_name' => 'web',
            ],
            [
                'name' => 'permission-add',
                'title' => 'Permission Add',
                'guard_name' => 'web',
            ],
            [
                'name' => 'permission-list',
                'title' => 'Permission List',
                'guard_name' => 'web',
            ]
        ];

        foreach ($permissions as $value) {
            // Vérifie si la permission existe déjà avant de la créer
            Permission::firstOrCreate(['name' => $value['name'], 'guard_name' => $value['guard_name']], $value);
        }
    }
}
?>