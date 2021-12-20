<?php
namespace App\Services;

interface CommentServiceInterface 
{
    public function getAllCommentsOfProduct($product_code);

    public function getAllCommentsOfProductWithID($id);
    
    public function store($data);
    
    public function destroy($comment_id);

    public function getAllComment();
    
    public function getAllCommentWithPaginate();
}