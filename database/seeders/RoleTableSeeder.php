<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $roles = [            
            [
                'name' => 'comptable',
                'title' => 'Comptable',
                'guard_name' => 'web',
                'permissions' => []
            ]
        ];

        foreach ($roles as $key => $value) {
            // Créer le rôle sans les permissions pour l'instant
            $permission = $value['permissions'];
            unset($value['permissions']);
            $role = Role::create($value);

            // Assigner les permissions après la création du rôle
            if (!empty($permission)) {
                $role->givePermissionTo($permission);
            }
        }
        
        // Récupérer les rôles après les avoir créés
        $roleAdmin = Role::findByName('admin');
        // Donner toutes les permissions à l'admin
        $roleAdmin->givePermissionTo(['role', 'role-add', 'role-list', 'permission', 'permission-add', 'permission-list']);

        $roleComptable = Role::findByName('comptable');
        // Exemple : Le comptable peut seulement voir les permissions
        $roleComptable->givePermissionTo(['permission-list']);
    }
}
