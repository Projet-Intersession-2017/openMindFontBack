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

	public function getExamenNameForSurvey($idExamen)
	{
		$examenName =DB::select("SELECT label
				FROM examen
				WHERE id = " . $idExamen);
		return $examenName;
	}

	public function getSurveyList($idExamen)
	{
		$surveyList =DB::select("SELECT sur.id, sur.labelle, sur.description, sur.examen_id 
				FROM survey AS sur
				WHERE sur.examen_id = " . $idExamen);
		return $surveyList;
	}

	public function getSurveyNameForQuiz($idSurvey)
	{
		$surveyName =DB::select("SELECT labelle
				FROM survey
				WHERE id = " . $idSurvey);
		return $surveyName;
	}

	public function getQuestionList($idSurvey)
	{
		$questionList =DB::select("SELECT question.id, question.label AS Intitule, question.note, question.type_id, choice.response AS reponse, choice.label AS choix, choice.id AS idChoix
				FROM question
				INNER JOIN choice ON question.id = choice.question_id
				WHERE question.survey_id = " . $idSurvey);
		return $questionList;
	}

	public function setUserAnswers($idCandidat, $idExamen, $idSurvey, $idQuestion, $valueReponse, $idNote, $idChoice)
	{
		$questionList = DB::insert("INSERT INTO useranswer (user_id, examen_id, survey_id, question_id, answer_value, note_survey, choice_id
 			VALUES (".$idCandidat.",".$idExamen.",".$idSurvey.",".$idQuestion.",'".$valueReponse."',".$idNote.",".$idChoice.")");
		return true;
	}
    
}
