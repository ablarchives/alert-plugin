<?php namespace Albrightlabs\Alert;

use Backend;
use System\Classes\PluginBase;

/**
 * Alert Plugin Information File
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
            'name'        => 'Alert',
            'description' => 'A simple front-end alert plugin.',
            'author'      => 'Albright Labs',
            'icon'        => 'icon-star'
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
        return [
            'Albrightlabs\Alert\Components\Alert' => 'alert',
        ];
    }
}
