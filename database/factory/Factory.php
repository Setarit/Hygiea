<?php
/**
 * Creates the correct database connection 
 * according to the vendor
 * @author javalsoft
 */
class Factory {
    public static function createFromVendor($autoLoader, $vendorName, $url, $username, $password, $db, $port){
        $vendorName = strtoupper($vendorName);
        if($vendorName === 'MONGODB'){
            $autoLoader->getUrlCreator('Mongo');
            $creator = new MongoUrlCreator($url, $username, $password, $port);
            $url = $creator->getCorrectUrl().'/'.$db;
            return new MongoClient($url);
        }else{
            throw new Exception("Invalid or no vendor specified in the database.json file");
        }
    }
    

}
