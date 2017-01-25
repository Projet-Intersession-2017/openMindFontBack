<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class TypeTableSeeder extends Seeder
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
        DB::table('type')->truncate();
        Type::create([
            'id'            => 1,
            'label'          => 'Checkbox',
        ]);
        Type::create([
            'id'            => 2,
            'label'          => 'Int',
        ]);
        Type::create([
            'id'            => 3,
            'label'          => 'Decimal',
        ]);
        Type::create([
            'id'            => 4,
            'label'          => 'String'
        ]);
    }
}
