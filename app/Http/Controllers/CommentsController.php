<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $comments = Comment::paginate(10);
        return view('comments.index', compact ('comments'));
    }


    public function create()
    {
        $comments = Comment::all();
        return view ('comments.create', compact('comments'));
    }


    public function store(Request $request)
    {
        $comments = new Comment();
        $comments ->user_name = $request->input('user_name');
        $comments->text = $request->input('text');
        $comments->date = $request->input('date');
        $comments->article_id = $request->input('article_id');
        $comments->save();
        return redirect('/comments');
    }


    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        $comments = Comment :: find($id);
        $articles = Article::all();
        return view('articles.edit', compact('comments', 'articles'));
    }

    public function update(Request $request, $id)
    {
        $comments =  Article :: find($id);
        $comments ->user_name = $request->input('user_name');
        $comments->text = $request->input('text');
        $comments->date = $request->input('date');
        $comments->article_id = $request->input('article_id');
        $comments->save();
        return redirect('/comments');
    }


    public function destroy($id)
    {
        $comments = Comment::find($id);
        $comments->delete();

        return redirect('/comments');
    }
}
