<?php
    require_once 'helpers/AutoLoader.php';
    $autoLoader = new AutoLoader();
    require_once 'controller/FrontController.php';
    require_once 'view/Template.php';
    require_once 'controller/CacheController.php';
    $cacheController = new CacheController();
    
    $frontController = new FrontController($autoLoader, $cacheController);
    $frontController->run();