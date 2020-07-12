<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Reply;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Question::all();
        $user = Auth::user();
        return view('question.index', compact('data','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();
        return view('question.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $question = Question::create($input);
        $question->tag_id = Tag::get('id');

        return redirect()->route('question.index')
            ->with('success', 'question dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        $answer = Answer::find($id);
        $replys = Reply::find($id);
        $tag = Tag::all();
        return view('question.show', compact('question','tag', 'answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();
        $question = Question::find($id);
        $user = Auth::user();

        if ($user->id === $question->user_id) {
            return view('question.edit', compact('question', 'user', 'tags'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);
        $input = $request->all();
        $question = Question::find($id);
        $question->tag_id = Tag::all();
        $question->update($input);

        return redirect()->route('question.index')
            ->with('success', 'question dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::find($id)->delete();
        return redirect()->route('question.index')
            ->with('success', 'question Deleted');
    }
}
