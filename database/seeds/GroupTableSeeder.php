<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class GroupTableSeeder extends Seeder
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
        DB::table('group')->delete();
        Group::create([
            'id'            => 1,
            'name'          => 'dev1',
        ]);
        Group::create([
            'id'            => 2,
            'name'          => 'dev2',
        ]);
        Group::create([
            'id'            => 3,
            'name'          => 'dev3',
        ]);
    }
}
