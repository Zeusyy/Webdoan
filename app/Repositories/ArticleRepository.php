<?php
namespace App\Repositories;

use App\Models\Article;


class ArticleRepository implements ArticleRepositoryInterface {
    
    public function getAllArticles(){
        return Article::orderBy('id','desc')->paginate(20);
    }

    public function store(Article $article){
        $article->save();
    }

    public function destroy(Article $article){
        $article->delete();
    }

    public function search($keyword)
    {
        return Article::where('title','like','%'.$keyword.'%')
            ->orderBy('id','desc')
            ->paginate(20);
    }

    public function findArticle($id)
    {
        return Article::find($id);
    }
    
    public function getTopArticle($number)
    {
        return Article::orderBy('comment_number','DESC')
        ->take($number)
        ->get();
    }
}