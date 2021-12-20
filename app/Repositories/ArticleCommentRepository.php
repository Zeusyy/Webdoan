<?php
namespace App\Repositories;

use App\Models\ArticleComment;

class ArticleCommentRepository implements ArticleCommentRepositoryInterface {

    public function getAllCommentsOfArticle($article_id)
    {
        return ArticleComment::where('article_id',$article_id)
            ->orderBy('id','desc')
            ->get();
    }

    public function store($article_id,$user_id,$content){
        
        $comment                = new ArticleComment;

        $comment->user_id       = $user_id;

        $comment->article_id    = $article_id;

        $comment->content       = $content;

        $comment->save();
    }

    public function destroy($commentID)
    {
        ArticleComment::destroy($commentID);
    }

    public function getAllCommentWithPaginate()
    {
        return ArticleComment::orderBy('id','desc')
        ->paginate(25);
    }
}