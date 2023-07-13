<?php

require_once "Controller.php";
class HomeController implements Controller
{

    public function handle()
    {
        require_once __DIR__."../../../views/home.php";
    }
}