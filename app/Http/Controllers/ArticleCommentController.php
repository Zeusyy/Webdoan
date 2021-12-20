<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\ArticleComment;
use App\Services\ArticleCommentServiceInterface;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    private $comment;

    public function __construct(ArticleCommentServiceInterface $comment)
    {
        $this->comment = $comment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = $this->comment->getAllCommentWithPaginate();
    
        return view('admin.manage comment article.index')
        ->with('comments',$comments);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        //
        
        $this->comment->store($request->data);
        $article_id = $request->data['article'];
        $comments = $this->comment->getAllCommentsOfArticle($article_id);
        $array = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;
        
        return view('comment.article')
        ->with('article_id',    $article_id)
        ->with('comments',      $comments)
        ->with('is_article',true) //for comment delete
        ->with('have_comment',  $have_comment);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleComment $articleComment)
    {
        //
        $articleID = $articleComment->article_id;
        $this->comment->destroy($articleComment);

        $comments = $this->comment->getAllCommentsOfArticle($articleID);
        $array = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;
        
        return view('comment.article')
        ->with('article_id',    $articleID)
        ->with('comments',      $comments)
        ->with('is_article',true) //for comment delete
        ->with('have_comment',  $have_comment);

        // return $articleComment;
    }

    public function delete(ArticleComment $comment)
    {
        // return $comment;
        $this->comment->destroy($comment);

        return redirect()->route('articleComment.index');

    }

}
