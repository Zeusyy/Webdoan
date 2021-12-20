<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Services\CommentServiceInterface;
use App\Services\ProductServiceInterface;

class CommentController extends Controller
{
    //
    private $comment;
    private $productService;

    public function __construct
    (
        CommentServiceInterface $comment,
        ProductServiceInterface $productService
        )
    {
        $this->comment = $comment;
        $this->productService = $productService;
    }
    
    public function getCommentsOfProduct($product_code)
    {
        // return $this->comment->getAllCommentsOfProduct($product_code);
        return view('comment.index');
    }

    public function addComment(CommentRequest $request){
        $this->comment->store($request->data);

        $product_code = $request->data['product'];

        $comments = $this->comment->getAllCommentsOfProduct($product_code);
        
        // convert comments json to plain old PHP array
        $array = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;
        

        return view('comment.index')
        ->with('product_code',  $product_code)
        ->with('comments',      $comments)
        ->with('have_comment',  $have_comment);
    }

    public function destroy(Comment $comment)
    {
        
        $this->comment->destroy($comment->id);

        $product = $this->productService->getProductByID($comment->product_id);

        $comments = $this->comment->getAllCommentsOfProductWithID($comment->product_id);
        
        // convert comments json to plain old PHP array
        $array = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;
        

        return view('comment.index')
        ->with('product_code',  $product->product_code)
        ->with('comments',      $comments)
        ->with('have_comment',  $have_comment);

    }

    public function delete(Comment $comment)
    {
        // return $comment;
        $this->comment->destroy($comment->id);

        return redirect()->route('manage.comment');

    }
    public function index(){
        $comments = $this->comment->getAllCommentWithPaginate();
    
        return view('admin.manage comment.index')
        ->with('comments',$comments);
    }
}
