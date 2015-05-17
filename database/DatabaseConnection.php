<?php

/**
 * Connects to the database
 *
 * @author javalsoft
 */
class DatabaseConnection {
    private $_connection;    
    
    public function __construct($autoLoader) {
        $autoLoader->loadDatabaseFactory();
        $configuration = json_decode(file_get_contents($autoLoader->getDatabaseConfigFile()));
        $this->_processVendor($configuration->vendor);
    }
    
    private function _processVendor($vendorName){
        if(strlen($vendorName) === 0){
            throw new Exception("No vendor specified in the database.json file");
        }
        
    }
}
