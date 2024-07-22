<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\User;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index()
    {
        $articles = Article::orderBy("created_at", "desc")->paginate(10);

        return view('articles.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with('user')->with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);

        return view('articles.show', compact('article'));
    }
    public function create()
    {
        $this->authorize('create', Article::class);
        return view('articles.create');
    }
    public function store(Request $request)
    {
        $this->authorize('create', Article::class);
        // vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;

        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ]);

        Article::create($request->all());
        return redirect('/articles')->with(['success_message' => 'L\'article a été crée !']);
    }
    public function edit(Article $article)
    {
        $this->authorize('update', $article);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $this->authorize('update', $article);
        // dd($article, $request->all());
        $article->update($request->all());
    }
    public function delete(Article $article)
    {
        $this->authorize('delete', $article);
        // vérification des permissions plus tard
        $article->delete();
    }
}
