<?php
/**
 * This controller controls the cache
 * When no cache available, the framework will not run (TODO: change) and throw
 *  a fatal error
 * The controller caches the database objects, so that there is no need to 
 * reprobe the database
 * @author javalsoft
 */
class CacheController {
    public function __construct() {
        //check if cache is available
        apc_sma_info();//will give a fatal error when not exists        
    }
    
    public function saveObjectClass($object){
        
    }
    
    public function removeObjectClass($objectClassName) {
        
    }
    
    public function fetchObjectClass($objectClassName) {
        
    }
}
