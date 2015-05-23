<?php
/**
 * Creates the correct database connection 
 * according to the vendor
 * @author javalsoft
 */
class Factory {
    public static function createFromVendor($vendorName, $url, $username, $password, $db){
        $vendorName = strtoupper($vendorName);
        if($vendorName === 'MONGODB'){
            $url = Factory::processMongoUrl($url, $username, $password);
            
            return new MongoClient();
        }else{
            throw new Exception("Invalid or no vendor specified in the database.json file");
        }
    }
    
    public static function processMongoUrl($url, $username, $password) {
        $url = \str_replace('://', '', $url);//prevent double ://
        if(strpos($url, 'mongodb://') !== -1){//no mongodb:// in url
            $url = 'mongodb://'.$url;
        }
    }
}
