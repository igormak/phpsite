<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 11.01.16
 * Time: 19:10
 * To change this template use File | Settings | File Templates.
 */

class Controller_About extends Controller
{

    function action_index()
    {
        $this->view->generate('about_view.phtml','template_view.phtml');
    }
}