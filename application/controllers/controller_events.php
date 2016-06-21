<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 11.01.16
 * Time: 19:16
 * To change this template use File | Settings | File Templates.
 */
class Controller_Events extends Controller
{

    function action_index()
    {
        $this->view->generate('events_view.phtml','template_view.phtml');
    }
}