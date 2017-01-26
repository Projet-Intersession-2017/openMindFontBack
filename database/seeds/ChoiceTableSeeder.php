<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Choice;

class ChoiceTableSeeder extends Seeder
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
        DB::table('choice')->truncate();

        // Boundery

        Choice::create([
            'id'            => 1,
            'response'          => "true",
            'label'          => "Reponse 1",
            'question_id'       => 1,  //TYpe checkbox
        ]);
        Choice::create([
            'id'            => 2,
            'response'          => "false",
            'label'          => "Reponse 2",
            'question_id'       => 1,  //TYpe checkbox
        ]);
        Choice::create([
            'id'            => 3,
            'response'          => "false",
            'label'          => "Reponse 3",
            'question_id'       => 1,  //TYpe checkbox
        ]);
        Choice::create([
            'id'            => 4,
            'response'          => "12",
            'label'          => "",
            'question_id'       => 2,  //Type int
        ]);
         Choice::create([
            'id'            => 5,
            'response'          => "3.14914",
            'label'          => "",
            'question_id'       => 3,  //minute
        ]);
        Choice::create([
            'id'            => 6,
            'response'          => "super réponse foireuse",
            'label'          => "",
            'question_id'       => 4,  //minute
        ]);
        Choice::create([
            'id'            => 7,
            'response'          => "false",
            'label'          => "Reponse 1",
            'question_id'       => 5,  //minute
        ]);
        Choice::create([
            'id'            => 8,
            'response'          => "true",
            'label'          => "Reponse 2",
            'question_id'       => 5,  //minute
        ]);
        Choice::create([
            'id'            => 9,
            'response'          => "50",
            'label'          => "",
            'question_id'       => 6,  //Type int
        ]);
         Choice::create([
            'id'            => 10,
            'response'          => "3.14914",
            'label'          => "",
            'question_id'       => 7,  //minute
        ]);
        Choice::create([
            'id'            => 11,
            'response'          => "super réponse foireuse",
            'label'          => "",
            'question_id'       => 8,  //minute
        ]);
    }
}
