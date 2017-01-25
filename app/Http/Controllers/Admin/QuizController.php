<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\QuizRepository;

class QuizController extends Controller
{
	protected $repoQuiz;

	public function __construct()
    {
        $this->repoQuiz = new QuizRepository;
    }


    public function listeexamen()
    {
		$examList = $this->repoQuiz->getExamList();
        return view('quiz.listeexamen', ['examList' => $examList]);
    }


    public function listesurvey(Request $request)
    {
		$surveyList = $this->repoQuiz->getSurveyList($request->idExamen);
        $examenName = $this->repoQuiz->getExamenNameForSurvey($request->idExamen);
        return view('quiz.listesurvey', ['surveyList' => $surveyList, 'examenName' => $examenName]);
    }


    public function listequestions(Request $request)
    {
		$questionsList = $this->repoQuiz->getQuestionList($request->idSurvey);
        $surveyName = $this->repoQuiz->getSurveyNameForQuiz($request->idSurvey);
        return view('quiz.listequestion', ['questionsList' => $questionsList, 'surveyName' => $surveyName, 'candidatId' => $request->idCandidat, 'examenId' => $request->idExamen, 'surveyId' => $request->idSurvey]);
    }


    public function sendresults(Request $request)
    {
        $idCandidat = $request->idCandidat;
        $idExamen = $request->idExamen;
        $idSurvey = $request->idSurvey;

        $tabQuestionReponse = array();

        $questionsList = explode(",", $request->tabQuestion);
        $reponsesList = explode(",", $request->tabReponse);
        for ($i = 0; $i < count($reponsesList); $i++)
        {
            if(strpos($reponsesList[$i], "||") == false)
            {
                array_push($tabQuestionReponse, $questionsList[$i]);
                array_push($tabQuestionReponse, $reponsesList[$i]);
            }
            else
            {
                 $responseCheckBox = explode("||", $reponsesList[$i]);
                 foreach ($responseCheckBox as $value) 
                 {
                     array_push($tabQuestionReponse, $questionsList[$i]);
                     array_push($tabQuestionReponse, $value);
                 }
            } 
        }

        var_dump($tabQuestionReponse);


        for ($j = 0; $j < $tabQuestionReponse; $j = $j+2)
        {
            $this->repoQuiz->setUserAnswers($idCandidat, $idExamen, $idSurvey, $tabQuestionReponse[$j], $tabQuestionReponse[$j+1]);
        }
        
    }
}
