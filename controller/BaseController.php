<?php

/**
 * BaseController for all view controllers
 *
 * @author javalsoft
 */
class BaseController {
    protected $_template;
    protected $_databaseConnection;

    public function __construct($autoLoader) {
        $this->_template = new Template($autoLoader);
        
        //load database
        $autoLoader->loadDatabaseConnection();
        $this->_databaseConnection = new DatabaseConnection($autoLoader);
    }
}
