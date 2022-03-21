<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        "title",
        "author",
        "catId",
        "pinned",
        "body",
        "sidePic",
        "openingPic",
        "closingPic"
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'catId'); //this is called inverse because you are using belongsTo() method
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }


}
