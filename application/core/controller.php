<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 08.01.16
 * Time: 17:00
 * To change this template use File | Settings | File Templates.
 */
class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }
}