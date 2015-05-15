<?php
    require_once 'helpers/AutoLoader.php';
    $autoLoader = new AutoLoader();
    require_once 'controller/FrontController.php';
    require_once 'view/Template.php';
    $frontController = new FrontController($autoLoader);
    $frontController->run();