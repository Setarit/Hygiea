<?php
/**
 * Loads the required files automatically
 *
 * @author javalsoft
 */
class AutoLoader {
    const CONTROLLER_DIR = "controller/";
    const VIEW_DIR = "view/";
    const TEMPLATES_DIR = "view/templates/";
    
    private $_rootDirectory;
    
    function __construct() {
        $this->_rootDirectory = str_replace("helpers", "", __DIR__);
    }
    
    public function loadController($controllerName) {
        require_once(self::CONTROLLER_DIR.$this->_extension($controllerName));
    }
    
    /**
     * Checks if the file contains the php extension
     * @param string $fileName The name of the file
     * @return string The file inclusive extension
     */
    private function _extension($fileName){
        if(strpos($fileName, ".php") !== false){
            return $fileName;
        }
        return $fileName.".php";
    }
    
    /**
     * 
     * @return string The location of the default layout
     */
    public function getLayout(){
        return $this->_rootDirectory.self::TEMPLATES_DIR."DefaultLayout.php";
    }
}