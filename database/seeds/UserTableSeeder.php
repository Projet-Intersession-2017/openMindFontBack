<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment() === 'production') {
            exit('I just stopped you getting fired. Love, Amo.');
        }
        DB::table('users')->truncate();
        User::create([
            'id'            => 46,
            'name'          => 'root',
            'email'         => 'root@root.com',
            'password'      => bcrypt('secret'),
            'role_id'       => 1,
            'group_id'      => null
        ]);
        User::create([
            'id'            => 47,
            'name'          => 'carotte1',
            'email'         => 'root1@root.com',
            'password'      => bcrypt('secret'),
            'role_id'       => 5,
            'group_id'      => 2
        ]);
        User::create([
            'id'            => 48,
            'name'          => 'carotte2',
            'email'         => 'root2@root.com',
            'password'      => bcrypt('secret'),
            'role_id'       => 5,
            'group_id'      => 2
        ]);
        User::create([
            'id'            => 49,
            'name'          => 'carotte3',
            'email'         => 'root3@root.com',
            'password'      => bcrypt('secret'),
            'role_id'       => 5,
            'group_id'      => 3
        ]);
        User::create([
            'id'            => 50,
            'name'          => 'carotte4',
            'email'         => 'root4@root.com',
            'password'      => bcrypt('secret'),
            'role_id'       => 5,
            'group_id'      => 3
        ]);
        User::create([
            'id'            => 51,
            'name'          => 'carotte5',
            'email'         => 'root5@root.com',
            'password'      => bcrypt('secret'),
            'role_id'       => 5,
            'group_id'      => 3
        ]);
    }
}
