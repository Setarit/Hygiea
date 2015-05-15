<?php
/**
 * Front controller
 * Checks the controller, method and params and invokes the corresponding controller
 * @author javalsoft
 */
class FrontController {
    private $_controller, $_method;
    private $_params = array();
    
    private $_autoLoader;
    
    const DEFAULT_CONTROLLER = "IndexController";
    const DEFAULT_METHOD = "index";
    
    function __construct($loader) {
        $this->_parseUrl();
        $this->_autoLoader = $loader;
    }

    private function _parseUrl() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //remove appname
        $path = preg_replace("/Hygiea/", "", $path);
        $path = str_replace("//", "", $path);//remove potential double forward slashes
        if(isset($_GET['cntrl'])){
            $this->_controller = $_GET['cntrl'];
        }
        if(isset($_GET['action'])){
            $this->_method = $_GET['action'];
        }
        if(isset($_GET['p'])){
            $this->_params = $_GET['p'];
        }
    }
    
    public function run(){
        if(!isset($this->_controller)){
            $this->_controller = self::DEFAULT_CONTROLLER;
        }
        if(!isset($this->_method)){
            $this->_method = self::DEFAULT_METHOD;
        }
        //load the files
        $this->_autoLoader->loadController($this->_controller);
        
        //invoke
        $reflectedClass = new ReflectionClass($this->_controller);
        $newInstance = $reflectedClass->newInstance($this->_autoLoader);//pass the autoloader
        $methodToInvoke = $reflectedClass->getMethod($this->_method);
        $methodToInvoke->invoke($newInstance, $this->_params);
    }
}
