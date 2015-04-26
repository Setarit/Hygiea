<?php
    require_once 'helpers/AutoLoader.php';
    $autoLoader = new AutoLoader();
    require_once 'controller/FrontController.php';
    $frontController = new FrontController($autoLoader);
    $frontController->run();