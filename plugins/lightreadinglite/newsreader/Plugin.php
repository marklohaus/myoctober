<?php namespace LightReadingLite\Newsreader;

use Backend;
use System\Classes\PluginBase;

/**
 * Newsreader Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Newsreader',
            'description' => 'A lite weight reader for Light Reading news',
            'author'      => 'LightReadingLite',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        // return []; // Remove this line to activate

        return [
            'Lightreadinglite\newsreader\Components\Storylist' => 'Storylist',
            'Lightreadinglite\Newsreader\Components\Story' => 'Story'
         // 'LightReadingLite\Newsreader\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'lightreadinglite.newsreader.some_permission' => [
                'tab' => 'Newsreader',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'newsreader' => [
                'label'       => 'Newsreader',
                'url'         => Backend::url('lightreadinglite/newsreader/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lightreadinglite.newsreader.*'],
                'order'       => 500,
            ],
        ];
    }
}
