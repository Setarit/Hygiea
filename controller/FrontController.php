<?php
/**
 * Front controller
 * Checks the controller, method and params and invokes the corresponding controller
 * @author javalsoft
 */
class FrontController {
    private $_controller, $_method;
    private $_params = array();
    
    const DEFAULT_CONTROLLER = "IndexController";
    const DEFAULT_METHOD = "index";
    
    function __construct() {
        $this->_parseUrl();
    }

    private function _parseUrl() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //remove appname
        $path = preg_replace("/Hygiea//", "", $path);
        
    }
}
