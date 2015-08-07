<?php namespace Octohelp\Picker;

use System\Classes\PluginBase;

/**
 * picker Plugin Information File
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
            'name'        => 'picker',
            'description' => 'No description provided yet...',
            'author'      => 'octohelp',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'picker' => [
                'label'       => 'Media Picker',
                'url'         => \Backend::url('octohelp/picker/mediapicker'),
                'icon'        => 'icon-file-image-o',
                'order'       => 500
            ]
        ];
    }

}
