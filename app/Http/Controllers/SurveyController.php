<?php

namespace App\Http\Controllers;
use App\Survey;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function index()
    {
        $survey = Survey::all();
        return view('survey.index', ['survey' => $survey]);
    }
    
    public function show(Survey $id)
    {
        return view('survey.show', ['survey' => $id]);
    }
    
    public function question()
    {
        $survey = Survey::all();
        return view('survey.question', ['survey' => $survey]);
    }
        
     public function answer()
    {
        $survey = Survey::all();
        return view('survey.answer', ['survey' => $survey]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'age' => 'required',
            'education' => 'required',
            'income' => 'required',
            'gender' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('survey/question')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $survey = Survey::all();
        foreach($survey as $value)
        {
            if($value->id ==1)
            {
                if(request('age') == 'a')
                {
                    $newSurvey = $value;
                    $newSurvey->a = $value->a + 1;
                    $newSurvey->save();
                }
                 if(request('age') == 'b')
                {
                    $newSurvey = $value;
                    $newSurvey->b = $value->b + 1;
                    $newSurvey->save();
                }
                if(request('age') == 'c')
                {
                    $newSurvey = $value;
                    $newSurvey->c = $value->c + 1;
                    $newSurvey->save();
                }
                if(request('age') == 'd')
                {
                    $newSurvey = $value;
                    $newSurvey->d = $value->d + 1;
                    $newSurvey->save();
                }
           }
            if($value->id ==2)
            {
                if(request('education') == 'a')
                {
                    $newSurvey2 = $value;
                    $newSurvey2->a = $value->a + 1;
                    $newSurvey2->save();
                }
                 if(request('education') == 'b')
                {
                    $newSurvey2 = $value;
                    $newSurvey2->b = $value->b + 1;
                    $newSurvey2->save();
                }
                if(request('education') == 'c')
                {
                    $newSurvey2 = $value;
                    $newSurvey2->c = $value->c + 1;
                    $newSurvey2->save();
                }
                if(request('education') == 'd')
                {
                    $newSurvey2 = $value;
                    $newSurvey2->d = $value->d + 1;
                    $newSurvey2->save();
                }
            }
            if($value->id ==3)
            {
                if(request('income') == 'a')
                {
                    $newSurvey3 = $value;
                    $newSurvey3->a = $value->a + 1;
                    $newSurvey3->save();
                }
                 if(request('income') == 'b')
                {
                    $newSurvey3 = $value;
                    $newSurvey3->b = $value->b + 1;
                    $newSurvey3->save();
                }
                if(request('income') == 'c')
                {
                    $newSurvey3 = $value;
                    $newSurvey3->c = $value->c + 1;
                    $newSurvey3->save();
                }
                if(request('income') == 'd')
                {
                    $newSurvey3 = $value;
                    $newSurvey3->d = $value->d + 1;
                    $newSurvey3->save();
                }
            }
            if($value->id ==4)
            {
                if(request('gender') == 'a')
                {
                    $newSurvey4 = $value;
                    $newSurvey4->a = $value->a + 1;
                    $newSurvey4->save();
                }
                 if(request('gender') == 'b')
                {
                    $newSurvey4 = $value;
                    $newSurvey4->b = $value->b + 1;
                    $newSurvey4->save();
                }
            }
        }
        return redirect('survey/answer');
    }
}
