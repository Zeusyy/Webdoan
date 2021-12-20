<?php
namespace App\Services;

use App\Repositories\CommentRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class CommentService implements CommentServiceInterface {
    private $comment;

    private $product;

    public function __construct
    (
        ProductServiceInterface     $product,

        CommentRepositoryInterface  $comment
    )
    {   
        $this->product = $product;

        $this->comment = $comment;
    }

    public function getAllCommentsOfProduct($product_code)
    {
        $product1 = $this->product->getProductByCode($product_code);

        return      $this->comment->getAllCommentsOfProduct($product1->id);
    }

    public function getAllCommentsOfProductWithID($id)
    {
        return      $this->comment->getAllCommentsOfProduct($id);
    }

    public function store($data)
    {
        $user_id        = Auth::user()->id;

        $product_id     = $this->product->getProductByCode($data['product'])->id;

        $content        = $data['comment'];

        $this->comment->store($product_id,$user_id,$content);
    }
    
    public function destroy($comment_id)
    {
        $this->comment->destroy($comment_id);
    }
    public function getAllComment()
    {
        // return $this->comment->getAllComment();
    }
    public function getAllCommentWithPaginate()
    {
        return $this->comment->getAllCommentWithPaginate();
    }
    
}