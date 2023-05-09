<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use Validator;

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

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'questionname'       => 'required',
            'question_type'      => 'required',
            'choice_1'          => 'required',
            'choice_2'          => 'required',
            'choice_3'          => 'required',
            'choice_4'          => 'required',
            'answer'             => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());  
        }

        try{
            $data = array(
                'question_name' => $request->questionname,  
                'question_type' => $request->question_type,
                'choice_1'      => $request->choice_1,      
                'choice_2'      => $request->choice_2,
                'choice_3'      => $request->choice_3,
                'choice_4'      => $request->choice_4,
                'answer'        => $request->answer,
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


    public function update(Request $request) 
    {
        $validator = Validator::make($request->all(), [ 
            'questionname'       => 'required',
            'question_type'      => 'required',
            'choice_1'          => 'required',
            'choice_2'          => 'required',
            'choice_3'          => 'required',
            'choice_4'          => 'required',
            'answer'             => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());  
        }
        
        try{
            $user = Questions::find($request->id);
            $data = array(
                'question_name' => $request->questionname,  
                'question_type' => $request->question_type,
                'choice_1'      => $request->choice_1,      
                'choice_2'      => $request->choice_2,
                'choice_3'      => $request->choice_3,
                'choice_4'      => $request->choice_4,
                'answer'        => $request->answer,
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
