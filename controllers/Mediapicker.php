<?php namespace Octohelp\Picker\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Mediapicker Back-end Controller
 */
class Mediapicker extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Octohelp.Picker', 'picker', 'mediapicker');
    }

    public function index() {
        $this->pageTitle = 'Media picker demo';
    }
}