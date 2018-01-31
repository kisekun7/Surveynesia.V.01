<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AutoNumber;
use App\Http\Controllers\Controller;
use App\Model\answer;
use App\Model\question;
use App\Model\survey;
use App\TagList;
use AutoNumberHelper;
use Validator;

class SurveyController extends Controller
{
    public function index()
    {
    	$survey = DB::table('surveys')
    				->join('questions','surveys.code_survey' , '=' , 'questions.code_survey')
    				->select(DB::raw('count(*) as count, surveys.survey_title') , 'surveys.id' , 'surveys.code_survey' ,'surveys.created_at')
    				->groupBy('surveys.id')
    				->get();
    	$questions = question::all();
        $codesurvey = $this->codesurvey();
        // $survey = survey::all();
    	return view('User.survey.home' , compact('codesurvey' , 'survey'));
    }

    public function review($code_survey)
    {   
            $sql = question::where('code_survey',$code_survey)->get();
            return view('User.survey.review', compact('sql'));   
    }

    public function codesurvey(){
        $table="surveys";
        $primary="code_survey";
        $prefix="SRV-";
        $kodeBarang=Autonumber::autonumber($table,$primary,$prefix);
        return $kodeBarang;
    }

    public function codequest(){
        $table="questions";
        $primary="code_quest";
        $prefix="QS-";
        $kodeBarang=Autonumber::autonumber($table,$primary,$prefix);
        return $kodeBarang;
    }

    public function create(request $request)
    {
       $survey = new survey;
       $survey->survey_title = $request->text;
       $survey->category_id = $request->text2;
       $survey->description = $request->text3;
       $survey->code_survey = $request->text4;
       $survey->save();

       $surveyId = $survey->id;
       return response()->json(['id'=>$surveyId]);
    }

    public function question($survey_id)
    {
        $survey = survey::find($survey_id);
        $codequest = $this->codequest();
        return view('User.survey.question', compact('survey' , 'codequest'));
    }

    public function addMorePost(Request $request,$survey_id)
    {
        $answers = new answer;
        $questions = new question;
        $surveys = new survey;

        foreach($request->input('answer') as $key => $value) {
            $rules["answer.{$key}"] = 'required';
        }

        $questions->question = $request->question;
        $questions->code_quest = $request->code_quest;
        $questions->code_survey = $request->code_survey;
        $questions->save();
        $question_id = $questions->id;
        $surveyid = DB::table('surveys')->select('id')->orderBy('id','desc')->limit('1')->first();
        $ab = $surveyid->id;
        
        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {
           for($i=0; $i < count($request->input('answer')); $i++){
                $name = $request->answer[$i];
                answer::create([
                    'answer'=>$name,
                    'question_id'=>$question_id
                    
                ]);
            }

            return response()->json(['success'=>'done', 'id'=>$ab  ]);
                
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function viewquestion($survey_id)
    {
        $surveyId = survey::find($survey_id);
        $query = DB::table('surveys')
            ->join('questions', 'questions.code_survey', '=', 'surveys.code_survey')
            ->select('surveys.code_survey','surveys.survey_title', 'questions.question' , 'questions.id' , 'questions.code_quest' )
            ->where('surveys.id',$survey_id)
            ->get();
        return view('User.survey.viewquestion', compact('query','surveyId'));

    }

    public function detail($survey_id , $code_quest)
    {
        $sql = question::where('code_quest' , $code_quest)->get();
        return view('User.survey.detail' , compact('sql'));
    }

    public function destroy($question_id)
    {   
        // $surveyid = DB::table('surveys')->select('id')->orderBy('id','desc')->limit('1')->first();
        // $ab = $surveyid->id;
        $question = question::where('questions.id',$question_id);
        $answer = answer::where('answers.question_id',$question_id);
        $question->delete();
        $answer->delete();
        return redirect()->back();
    }
}
