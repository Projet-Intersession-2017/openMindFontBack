<?php
namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class QuizRepository
{
	public function getExamList()
	{
		$examList = DB::select("SELECT exam.id, exam.label, exam.validate FROM examen AS exam");
		return $examList;
	}

	public function getSurveyList($idExamen)
	{
		$surveyList =DB::select("SELECT sur.id, sur.labelle, sur.description, sur.examen_id 
				FROM survey AS sur
				WHERE sur.examen_id = " . $idExamen);
		return $surveyList;
	}

	public function getQuestionList($idSurvey)
	{
		$questionList =DB::select("SELECT question.id, question.label AS Intitule, question.note, question.type_id, choice.response AS reponse, choice.label AS choix
				FROM question
				INNER JOIN choice ON question.id = choice.question_id
				WHERE question.survey_id = " . $idSurvey);
		return $questionList;
	}
    
}
