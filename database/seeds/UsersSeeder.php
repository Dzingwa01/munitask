 <?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $password = \Illuminate\Support\Facades\Hash::make('secret');
        $verification_time = \Carbon\Carbon::now();
        $super = User::create(['name'=>'Super','surname'=>'User','email'=>'super@munitask.co.za'
            ,'contact_number'=>'076677777','email_verified_at'=>$verification_time,'password'=>$password]);

        $super_role = Role::where('name','app-admin')->first();
        $super->roles()->attach($super_role->id);

        $plmber = User::create(['name'=>'Plumber','surname'=>'User','email'=>'plumber@munitask.co.za'
            ,'contact_number'=>'076677777','email_verified_at'=>$verification_time,'password'=>$password]);

        $plumber = Role::where('name','plumber')->first();
        $plmber->roles()->attach($plumber->id);

        $manager = User::create(['name'=>'Manager','surname'=>'User','email'=>'manager@munitask.co.za'
            ,'contact_number'=>'076677777','email_verified_at'=>$verification_time,'password'=>$password]);

        $manager_role = Role::where('name','manager')->first();
        $manager->roles()->attach($manager_role->id);

        $agent = User::create(['name'=>'Call Center','surname'=>'User','email'=>'agent@munitask.co.za'
            ,'contact_number'=>'076677777','email_verified_at'=>$verification_time,'password'=>$password]);

        $agent_role = Role::where('name','call-center-agent')->first();
        $agent->roles()->attach($agent_role->id);
    }
}
