<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Services\ArticleCommentServiceInterface;
use App\Services\ArticleServiceInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleService;
    private $comment;

    public function __construct
        (
        ArticleCommentServiceInterface $comment,
        ArticleServiceInterface $articleService
        )
    {
        $this->comment          = $comment;
        $this->articleService   = $articleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->search)
            $articles = $this->articleService->search($request->search);
        else
            $articles = $this->articleService->getAllArticles();
        
        return view('article.index')
        ->with('articles',$articles);
        // return ($articles[0]->user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //
        $article =  $this->articleService->store($request);
        
        return redirect()->route('article.show',$article);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //

        $comments = $this->comment->getAllCommentsOfArticle($article->id);
        
        // convert comments json to plain old PHP array
        $array = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;
        
        return view('article.detail')
        ->with('article',       $article)
        ->with('is_article',true) //for comment delete
        ->with('comments',      $comments)      // json
        ->with('have_comment',  $have_comment); // boolean
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('article.edit')
        ->with('article',$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        //
        $this->articleService->update($request,$article);
        
        return redirect()->route('article.show',$article);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $this->articleService->destroy($article);
        
        return redirect()->route('article.index');
    }
    public function indexManage()
    {
        $articles = $this->articleService->getAllArticles();
        
        return view('admin.manage article.index')
        ->with('articles',$articles);
    }

    public function deleteManageAjax($id)
    {
        $deleteArticle = $this->articleService->getArticleByID($id);

        $this->articleService->destroy($deleteArticle);

        $articles = $this->articleService->getAllArticles();

        return view('admin.manage article.change')
        ->with('articles',$articles);

    }
}
