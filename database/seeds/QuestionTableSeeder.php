<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class QuestionTableSeeder extends Seeder
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
        DB::table('question')->truncate();
        Question::create([
            'id'            => 1,
            'label'          => 'CHECKBOX - En quoi....?',
            'note'          => 2,
            'survey_id'       => 1,  //minute
            'type_id'       => 1
        ]);
        Question::create([
            'id'            => 2,
            'label'          => "INT - Qu'est qui...?",
            'note'          => 3,
            'survey_id'       => 1,  //minute
            'type_id'       => 2
        ]);
        Question::create([
            'id'            => 3,
            'label'          => "DECIMAL - Qu'est qui...?",
            'note'          => 3,
            'survey_id'       => 1,  //minute
            'type_id'       => 3
        ]);
        Question::create([
            'id'            => 4,
            'label'          => "STRING - Qu'est qui...?",
            'note'          => 3,
            'survey_id'       => 1,  //minute
            'type_id'       => 4
        ]);
         Question::create([
            'id'            => 5,
            'label'          => 'CHECKBOX - En quoi....?',
            'note'          => 2,
            'survey_id'       => 2,  //minute
            'type_id'       => 1
        ]);
        Question::create([
            'id'            => 6,
            'label'          => "INT - Qu'est qui...?",
            'note'          => 3,
            'survey_id'       => 2,  //minute
            'type_id'       => 2
        ]);
        Question::create([
            'id'            => 7,
            'label'          => "DECIMAL - Qu'est qui...?",
            'note'          => 3,
            'survey_id'       => 2,  //minute
            'type_id'       => 3
        ]);
        Question::create([
            'id'            => 8,
            'label'          => "STRING - Qu'est qui...?",
            'note'          => 3,
            'survey_id'       => 2,  //minute
            'type_id'       => 4
        ]);
    }
}
