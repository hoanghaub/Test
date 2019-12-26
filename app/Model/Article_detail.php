<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article_detail extends Model
{
    protected $table = 'article_detail';
    protected $fillable = ['name','day','description'];
}
