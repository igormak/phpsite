<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mak
 * Date: 08.01.16
 * Time: 17:00
 * To change this template use File | Settings | File Templates.
 */
class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view, $data = null, $data2 = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include 'application/views/'.$template_view;
    }
}