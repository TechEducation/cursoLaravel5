<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title', 'body', 'description', 'created_at', 'updated_at'];
    public $timestamps = false;
}
