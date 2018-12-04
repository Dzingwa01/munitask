<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $super_admin = [
            'super-delete' => true,
            'super-add' => true,
            'super-update' => true,
            'super-view' => true,
        ];

        $plumber_perm = [
            'plumber-delete' => true,
            'plumber-add' => true,
            'plumber-update' => true,
            'plumber-view' => true,
        ];

        $mg_perms = [
            'manager-delete' => true,
            'manager-add' => true,
            'manager-update' => true,
            'manager-view' => true,
        ];

        $call_center_agent = [
            'call-center-delete' => true,
            'call-center-add' => true,
            'call-center-update' => true,
            'call-center-view' => true,
        ];

        $super_user = Role::create([
            'name' => 'app-admin',
            'display_name'=>'App Admin',
            'permissions' =>$super_admin,
            'guard_name'=>'web'
        ]);

        $plumber_user = Role::create([
            'name' => 'plumber',
            'display_name'=>'Plumber',
            'permissions' =>$plumber_perm,
            'guard_name'=>'web'
        ]);

        $manager = Role::create([
            'name' => 'manager',
            'display_name'=>'Manager',
            'permissions' =>$mg_perms,
            'guard_name'=>'web'
        ]);

        $call_center = Role::create([
            'name' => 'call-center-agent',
            'display_name'=>'Call Center Agent',
            'permissions' =>$call_center_agent,
            'guard_name'=>'web'
        ]);

    }
}
