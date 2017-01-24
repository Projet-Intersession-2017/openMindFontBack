<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questionnaire;

class SurveyTableSeeder extends Seeder
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
        DB::table('survey')->truncate();
        Questionnaire::create([
            'id'            => 1,
            'labelle'          => 'Premier semestre',
            'description'          => "description premier semestre",
            'temps'       => 50,  //minute
            'category_id'       => 1,
            'examen_id'       => 1
        ]);
        Questionnaire::create([
            'id'            => 2,
            'labelle'          => 'Semestre 2',
            'description' => "description second semestre",
            'temps'       => 50, //minute
            'category_id'       => 1,
            'examen_id'       => 1
        ]);
    }
}