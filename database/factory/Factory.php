<?php
/**
 * Creates the correct database connection 
 * according to the vendor
 * @author javalsoft
 */
class Factory {
    public static function createFromVendor($vendorName, $url, $username, $password, $db, $port){
        $vendorName = strtoupper($vendorName);
        if($vendorName === 'MONGODB'){
            $url = Factory::processMongoUrl($url, $username, $password, $port).'/'.$db;
            var_dump($url);
            return new MongoClient($url);
        }else{
            throw new Exception("Invalid or no vendor specified in the database.json file");
        }
    }
    
    public static function processMongoUrl($url, $username, $password, $port) {
        $url = \str_replace('mongodb://', '', $url);//prevent double ://
        $url = Factory::processMongoAuthentication($url, $username, $password);
        $url = 'mongodb://'.$url;
        return Factory::processMongoPort($url, $port);
    }
    
    public static function processMongoAuthentication($url, $username, $password) {
        if(strlen($username) === 0 && strlen($password) === 0){
            return $url;
        }
        $indexToInsert = (strpos($url, 'mongodb://') !== -1) ? strpos($url, 'mongodb://') : 0;        
        return substr_replace($url, $username.':'.$password.'@', $indexToInsert, 0);
    }
    
    public static function processMongoPort($url, $port) {
        return (strlen($port) !== 0) ? $url.':'.$port : $url.':27017';
    }
}
