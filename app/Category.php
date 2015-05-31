<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = [
        'name',
//        'article_id',
    ];

//    public function article()
//    {
//        return $this->hasMany('App\Article');
//    }
}
