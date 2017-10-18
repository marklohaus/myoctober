<?php namespace LightReadingLite\Newsreader\Components;

use Cms\Classes\ComponentBase;
use LightReadingLite\Newsreader\Models\Articles;
use Illuminate\Database\Query\Expression;

class Storylist extends ComponentBase
{

    /** 
     * This is a collection of Stories.
     * @var array
    */
    public $stories;

    public function componentDetails()
    {
        return [
            'name'        => 'Storylist Component',
            'description' => 'Light Reading Lite story list'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        // Will be run always, including AJAX events

    }
    public function onRun()
    {
        // This code will not execute for ajax events

        // $this->stories = Articles::get();

        // $this->stories = Articles::categories()->where('category_id', 1)->get();

        // Raw query until I get Eloquent to work.
        $this->stories = \Db::select('

select 
	`lightreadinglite_newsreader_categories`.*,
	 articles.*
from 
	`lightreadinglite_newsreader_categories` 
inner join 
	lightreadinglite_newsreader_article_categories `articles_category` on `lightreadinglite_newsreader_categories`.`id` = `articles_category`.`category_id` 
inner join
    lightreadinglite_newsreader_articles articles on articles.id = articles_category.article_id
where 
	`articles_category`.`category_id` = :categoryId'
            , ['categoryId' => 2]);

    }
}
