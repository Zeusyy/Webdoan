<?php
namespace App\Services;

use App\Models\Article;
use App\Repositories\ArticleRepositoryInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleService implements ArticleServiceInterface {

    private $articleRepository;

    public function __construct
    (
        ArticleRepositoryInterface $articleRepository
    )
    {
        $this->articleRepository = $articleRepository;
    }
    
    public function getAllArticles()
    {
        return $this->articleRepository->getAllArticles();
    }
    public function getArticleByID($id)
    {
        return $this->articleRepository->findArticle($id);
    }

    public function store(Request $request)
    {
        $newArticle                 = new Article;

        $newArticle->title          = $request->title;

        $newArticle->abstract       = $request->abstract;

        $newArticle->content        = $request->content;

        $newArticle->category_id    = 3;

        $newArticle->user_id        = Auth::user()->id;
        
        if( !empty($request->file('thumbnail')) )
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('thumbnail')->getRealPath(),[
                'folder' => 'FnGO/article/thumbnail',
            ])->getSecurePath();

            $newArticle->thumbnail =  $uploadedFileUrl;
        }

        if(!empty($request->file('background')))
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('background')->getRealPath(),[
                'folder' => 'FnGO/article/background',
            ])->getSecurePath();

            $newArticle->background = $uploadedFileUrl;
        }

        $this->articleRepository->store($newArticle);

        return $newArticle;

    }
    public function update(Request $request, Article $article)
    {
        $article->title     = $request->title;

        $article->abstract  = $request->abstract;

        if( !empty($request->file('thumbnail')) )
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('thumbnail')->getRealPath(),[
                'folder' => 'FnGO/article/thumbnail',
            ])->getSecurePath();

            $article->thumbnail = $uploadedFileUrl;
        }

        if( !empty($request->file('background')) )
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('background')->getRealPath(),[
                'folder' => 'FnGO/article/background',
            ])->getSecurePath();

            $article->background = $uploadedFileUrl;
        }
        $article->content = $request->content;
        
        $this->articleRepository->store($article);
    }
    public function destroy(Article $article)
    {
        $this->articleRepository->destroy($article);
    }
    public function search($keyword){
        return $this->articleRepository->search($keyword);
    }
    public function getTopArticle($number)
    {
        return $this->articleRepository->getTopArticle($number);
    }
}