<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\api\v1\ArticleRequest;


class ArticleController extends Controller
{
    

    public function index()
    {
        $articles = Article::orderBy('id','desc')->take(10)->get();
        return response([
            'data' => $articles
        ], 200);
    }


    
    

    public function store(ArticleRequest $request)
    {
        //validation with ArticleRequest

        return request('title');
        Article::create([
            'title' => request('title'),
            'text' => request('text'),
        ]);
        return response([
            'status' => 'success'
        ], 200);

    }

   
    

    public function show($id)
    {

        $article = Article::find($id);
        return response([
            'data' => $article
        ], 200);

    }

    
    

    public function edit($id)
    {
        
        $article = Article::find($id);
        return response([
            'data' => $article
        ], 200);

    }

    
    

    public function update(ArticleRequest $request, $id)
    {
        //validation with ArticleRequest

        Article::find($id)->update([
            'title' => request('title'),
            'text' => request('text'),
        ]);
        return response([
            'status' => 'success'
        ], 200);

    }

    
    

    public function destroy($id)
    {
        
        Article::destroy($id);
        return response([
            'status' => 'success'
        ], 200);

    }


    
    public function create()
    {
        return response([
            "data" => "this is should be on mobile app!!!"
        ],200);
    }

}
