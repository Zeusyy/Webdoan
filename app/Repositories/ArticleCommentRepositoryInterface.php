<?php
namespace App\Repositories;

use App\Models\ArticleComment;

interface ArticleCommentRepositoryInterface{

    public function getAllCommentsOfArticle($article_id);

    public function store($article_id,$user_id,$content);
    
    public function destroy($commentID);
    
    public function getAllCommentWithPaginate();
}