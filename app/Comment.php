<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        "name",
        "body",
        "post_id",
        "created_at",
        "updated_at"
    ];
    public function addComment($body, $name){
        $this->comments()->create(compact('body', 'name'));
    }
}
