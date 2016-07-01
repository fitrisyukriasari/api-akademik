<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();
        DB::table('cms_user_roles')->truncate();

        Role::create(['role_name' => 'Administrator']);
        Role::create(['role_name' => 'Mahasiswa']);

        $user = factory(User::class)->create(['username' => 'admin', 'password' => bcrypt('admin')]);
        $user->roles()->attach(1);

        factory(User::class, 5)->create()->each(function($user) {
            $user->roles()->attach(2);
        });
    }
}
