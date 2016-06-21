<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 09.01.16
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */
class Controller_Portfolio extends Controller
{

    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $carousel = $this->model->get_carousel();
        $this->view->generate('portfolio_view.phtml', 'template_view.phtml', $data, $carousel);
    }
}