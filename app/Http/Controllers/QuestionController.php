<?php

namespace App\Http\Controllers;

use App\Question;
use App\Tag;
use App\QuestionModel;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        return view('question.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = $request->all();
        ///dd($request->tags);
        $newAsk = Question::create([
            "judul" => $request->judul,
            "isi_pertanyaan" => $request->isi_pertanyaan,
        ]);
        $tagArr = explode(",", $request->tags);
        $tagMulti = [];
        foreach ($tagArr as $strtag) {
         $tagAssc["tags"] = $strtag;
         $tagMulti[] = $tagAssc;
        } 

        foreach ($tagMulti as $tagCek) {
            $tag = Tag::firstOrCreate($tagCek);
            $newAsk->tags()->attach($tag->id);
        }

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        Question::find($question);
        return view('question.detail', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        Question::find($question);
        //dd($question->tags);
        return view('question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
        $data = $request->all();
        $data2 = Question::create([]);
        $tagArr = explode(",", $request->tags);
        $tagMulti = [];
        foreach ($tagArr as $strtag) {
         $tagAssc["tags"] = $strtag;
         $tagMulti[] = $tagAssc;
        } 
        foreach ($tagMulti as $tagCek) {
            $tag = Tag::firstOrCreate($tagCek);
            $data2->tags()->attach($tag->id);
        }
        unset($data['_token'], $data['_method'],$data['tags']);
        QuestionModel::update($data);

        return redirect('/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        QuestionModel::delete($id);
        return redirect('/questions');
    }
    
}
