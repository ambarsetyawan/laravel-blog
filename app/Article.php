<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class Article extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'body'
    ];

}
