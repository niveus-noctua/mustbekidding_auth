<?php


namespace module\auth\controller;


use core\controller\AbstractController;

class TestController extends AbstractController {

    public function indexAction() {
        $html = '
            <div>
                <p>Это приложение авторизации</p> 
            </div>
        ';
        $html .= '
            <a href="/" style="text-decoration: none"><input type="button" value="На главную"/></a>
        ';
        echo $html;
    }

}