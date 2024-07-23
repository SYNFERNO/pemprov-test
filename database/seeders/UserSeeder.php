<?php

namespace Database\Seeders;

use \App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $list = ['create', 'read', 'update', 'delete'];

        // user
        $userPermissions = collect($list)->map(function ($permission) {
            return ['name' => $permission . ' user', 'guard_name' => 'web'];
        });

        Permission::insert($userPermissions->toArray());

        // Administrator
        $su = Role::create([
            'name' => 'Administrator'
        ]);
        $su->givePermissionTo(Permission::all());

        // User
        $user = Role::create([
            'name' => 'User'
        ]);
        $su->givePermissionTo(Permission::all());

        // create user
        $user = User::factory()->create([
            'username' => 'Andi',
            'email' => 'andi@andi.com',
            'password' => '12345',
        ]);
        $user->assignRole('Administrator');

        $user = User::factory()->create([
            'username' => 'Budi',
            'email' => 'budi@budi.com',
            'password' => '67890',
        ]);
        $user->assignRole('User');

        $user = User::factory()->create([
            'username' => 'Caca',
            'email' => 'caca@caca.com',
            'password' => 'abcde',
        ]);
        $user->assignRole('User');

        $user = User::factory()->create([
            'username' => 'Deni',
            'email' => 'deni@deni.com',
            'password' => 'fghij',
        ]);
        $user->assignRole('User');

        $user = User::factory()->create([
            'username' => 'Euis',
            'email' => 'euis@euis.com',
            'password' => 'klmno',
        ]);
        $user->assignRole('User');

        $user = User::factory()->create([
            'username' => 'Fafa',
            'email' => 'fafa@fafa.com',
            'password' => 'pqrst',
        ]);
        $user->assignRole('User');
    }
}
