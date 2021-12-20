<?php
namespace App\Services;

use App\Models\Article;
use Illuminate\Http\Request;

interface ArticleServiceInterface {
    public function getAllArticles();

    public function getArticleByID($id);
    
    public function store(Request $request);
    
    public function update(Request $request, Article $article);
    
    public function destroy(Article $article);

    public function search($keyword);

    public function getTopArticle($number);
}