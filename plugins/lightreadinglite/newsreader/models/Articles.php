<?php namespace LightReadingLite\Newsreader\Models;

use Model;

/**
 * Articles Model
 */
class Articles extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'lightreadinglite_newsreader_articles';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'categories' => 'Lightreadinglite\Newsreader\Models\Category',
        'table'    => 'lightreadinglite_newsreader_article_categories',
        'key'      => 'article_id',
        'otherKey' => 'category_id'
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
