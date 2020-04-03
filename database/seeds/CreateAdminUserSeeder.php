<?php

  

use Illuminate\Database\Seeder;

use App\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

  

class CreateAdminUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = User::create([

        	'name' => 'Hardik Savani', 

        	'email' => 'mohamed.hanini95@gmail.com',

        	'password' => bcrypt('hanini321')

        ]);

  

        $role = Role::create(['name' => 'user']);

   

        $permissions = Permission::pluck('id','id')->all();

  

        $role->syncPermissions($permissions);

   

        $user->assignRole([$role->id]);

    }

}