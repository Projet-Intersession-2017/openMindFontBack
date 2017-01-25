<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Examen;

class ExamenTableSeeder extends Seeder
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
        DB::table('examen')->delete();
        Examen::create([
            'id'            => 1,
            'label'          => 'Php dev8',
            'validate'          => false,
            'user_id'       => 1
        ]);
        Examen::create([
            'id'            => 2,
            'label'          => 'Php dev9',
            'validate'          => true,
            'user_id'       => 2
        ]);
    }
}
