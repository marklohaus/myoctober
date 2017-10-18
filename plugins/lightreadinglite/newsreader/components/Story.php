<?php namespace LightReadingLite\Newsreader\Components;

use Cms\Classes\ComponentBase;

class Story extends ComponentBase
{

    /** 
     * This is an Article's name.
     * @var string
    */
    public $name; 

     /** 
     * This is an Article's description.
     * @var string
    */
    public $desc;        

    /** 
     * This is an Article's body.
     * @var string
    */
    public $body;

    public function componentDetails()
    {
        return [
            'name'        => 'Story Component',
            'description' => 'LightReadinglightStory'
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

        $this->name = 'new router type released';
        $this->des = 'des fro new router type';
        $this->body = 'body for new router type released';

    }

}
