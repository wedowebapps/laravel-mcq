<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use App\Http\Requests\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Questions::all();
        return view('question.index',compact('questions'));
    }

    public function create()
    {
        return view('question.create');
    }

    public function submit(Question $request)
    {
        try{
            $answers = implode(",",$request->answer);
            $data = array(
                'question_name' => $request->questionname,  
                'question_type' => $request->question_type,
                'choice_1'      => $request->choice_1,      
                'choice_2'      => $request->choice_2,
                'choice_3'      => $request->choice_3,
                'choice_4'      => $request->choice_4,
                'answer'        => $answers,
            );
            $questions = Questions::create($data);
           
            if(!is_null($questions)) {
                return redirect()->route('question.index')->with("success", "Question Created");;
            }
        }catch (Exception $e) {
            // something went wrong whilst attempting to encode the token
            return back()->with("failed", "Failed!");
        }
    }

    public function edit($id) 
    {
        $questions = Questions::find($id);
        return view('question.edit',compact('questions'));
    }


    public function update(Question $request) 
    {
        try{
            $user = Questions::find($request->id);
            $answers = implode(",",$request->answer);
            $data = array(
                'question_name' => $request->questionname,  
                'question_type' => $request->question_type,
                'choice_1'      => $request->choice_1,      
                'choice_2'      => $request->choice_2,
                'choice_3'      => $request->choice_3,
                'choice_4'      => $request->choice_4,
                'answer'        => $answers,
            );
            $user->update($data);
            if(!is_null($user)) {
                return redirect()->route('question.index')->with("success", "Question Updated");
            }

        }catch (Exception $e) {
            // something went wrong whilst attempting to encode the token
            return back()->with("failed", "Failed!");
        }
    }

    public function delete($id) 
    {
        $questions = Questions::delete($id);
        return redirect()->route('question.index')->with("success", "Question Deleted");
    }
}
