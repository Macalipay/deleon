<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');
        
        Role::create(['name' => 'Super Admin']);
        $superadmin = factory(\App\User::class)->create([
            'name' => 'OpiMac',
            'email' => 'opimac@gmail.com',
        ]);

        $superadmin->assignRole('Super Admin');
        
        Role::create(['name' => 'Admin']);
        $user = factory(\App\User::class)->create();
        $user->assignRole('Admin');


        Role::create(['name' => 'Member']);
        $user = factory(\App\User::class)->create();
        $user->assignRole('Member');

        $admin = factory(\App\User::class)->create([
            'name' => 'OpiMac Admin',
            'email' => 'opimac_admin@gmail.com',
        ]);

        $admin->assignRole('Admin');

        $member = factory(\App\User::class)->create([
            'name' => 'OpiMac Member',
            'email' => 'opimac_member@gmail.com',
        ]);

        $member->assignRole('Member');

     
    }
}
