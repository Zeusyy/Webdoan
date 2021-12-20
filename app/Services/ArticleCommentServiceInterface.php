<?php
namespace App\Services;

use App\Models\ArticleComment;

interface ArticleCommentServiceInterface {
    public function getAllCommentsOfArticle($article_id);

    public function store($data);

    public function destroy(ArticleComment $comment);
    
    public function getAllCommentWithPaginate();
}