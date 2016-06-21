<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 09.01.16
 * Time: 15:04
 * To change this template use File | Settings | File Templates.
 */
class Controller_Main extends Controller
{

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

	function action_index()
	{
        $slides = $this->model->get_slides();
        $carousel = $this->model->get_carousel();
		$this->view->generate('main_view.phtml', 'template_view.phtml', $slides, $carousel);
	}
}