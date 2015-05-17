<?php
/**
 * Creates the correct database connection 
 * according to the vendor
 * @author javalsoft
 */
class Factory {
    public static function createFromVendor($vendorName){
        $vendorName = strtoupper($vendorName);
        if($vendorName === 'MONGODB'){
            return new MongoClient();
        }
    }
}
