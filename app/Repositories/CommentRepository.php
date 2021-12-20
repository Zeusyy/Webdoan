<?php
namespace App\Repositories;

use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface {

    public function getAllCommentsOfProduct($productId)
    {
        return Comment::where('product_id',$productId)
            ->orderBy('id','desc')
            ->get();
    }

    public function store($product_id,$user_id,$content)
    {
        $comment                = new Comment;
        
        $comment->user_id       = $user_id;

        $comment->product_id    = $product_id;

        $comment->content       = $content;
        
        $comment->save();
    }
    public function destroy($comment_id)
    {
        Comment::destroy($comment_id);
    }
    public function getAllComment()
    {

    }

    public function getAllCommentWithPaginate()
    {
        return Comment::orderBy('id','DESC')->paginate(25)
        ;
    }
}