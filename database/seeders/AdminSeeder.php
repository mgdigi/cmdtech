<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer un utilisateur admin
        $user = User::create([
            'username' => 'mohamedgueye',
            'first_name' => 'Mohamed',
            'last_name' => 'Gueye',
            'email' => 'gueyemohamed287@gmail.com',
            'password' => bcrypt('mohamed123'), // Assurez-vous de hacher le mot de passe
            'user_type' => 'admin',
            'status' => 'active',
        ],
    );

    $users = User::all();

        // Parcourir chaque utilisateur et assigner un rôle selon `user_type`
        foreach ($users as $user) {
            if ($user->user_type == 'admin') {
                $user->assignRole('admin');
            } elseif ($user->user_type == 'comptable') {
                $user->assignRole('comptable');
            }
        }

        // Créer ou récupérer le rôle 'admin'
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Donner toutes les permissions au rôle admin
        $permissions = Permission::all();
        $adminRole->syncPermissions($permissions);

        // Assigner le rôle 'admin' à l'utilisateur
        $user->assignRole($adminRole);
        
    }
}
