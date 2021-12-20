<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    //
    protected $fillable =[
        'content','article_id','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function day(){
        
        $date = $this->created_at;
        $day = date('d',strtotime($date));
        $month = date('m',strtotime($date));
        $year = date('Y',strtotime($date));

        return $day . "/" . $month . "/" . $year;
    }
}
