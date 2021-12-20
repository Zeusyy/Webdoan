<?php
namespace App\Services;

use App\Models\ArticleComment;
use App\Repositories\ArticleCommentRepositoryInterface;
use App\Repositories\ArticleRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ArticleCommentService implements ArticleCommentServiceInterface {

    private $comment;

    private $articleRepository;

    public function __construct
    (
        ArticleCommentRepositoryInterface   $comment,

        ArticleRepositoryInterface          $articleRepository)
    {
        $this->articleRepository    = $articleRepository;

        $this->comment              = $comment;
    }

    public function getAllCommentsOfArticle($article_id)
    {
        return $this->comment->getAllCommentsOfArticle($article_id);
    }

    public function store($data)
    {
        $user_id    = Auth::user()->id;

        $article_id = $data['article'];
        
        $content    = $data['comment'];
        
        $article    = $this->articleRepository->findArticle($article_id);
        
        $article->comment_number++;
        
        $this->articleRepository->store($article);
        
        $this->comment->store($article_id,$user_id,$content);
    }
    
    public function destroy(ArticleComment $comment)
    {
        $this->comment->destroy($comment->id);
    }
    public function getAllCommentWithPaginate()
    {
        return $this->comment->getAllCommentWithPaginate();
    }
}