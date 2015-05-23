<?php

/**
 * Connects to the database
 *
 * @author javalsoft
 */
class DatabaseConnection {
    private $_connection;
    private $_url, $_password, $_database, $_username, $_port;


    public function __construct($autoLoader) {
        $autoLoader->loadDatabaseFactory();
        $configuration = json_decode(file_get_contents($autoLoader->getDatabaseConfigFile()));
        $this->_url = $configuration->connection;
        $this->_password = $configuration->password;
        $this->_username = $configuration->username; 
        $this->_port = $configuration->port;
        $this->_processVendor($configuration->vendor);
    }
    
    private function _processVendor($vendorName){
        $this->_connection = Factory::createFromVendor($vendorName, $this->_url, $this->_username, $this->_password, $this->_database);
    }
}
