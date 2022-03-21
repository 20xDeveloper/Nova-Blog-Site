<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "Name",
        "Description"
    ];

    public function articles(){
        return $this->hasMany(Article::class, 'catId'); //second parameter is in the article table
        // and your linking that to your primary id. Laravel automatically
        // knows the primary id for the category table because your writng this code in category model file
    }
}
