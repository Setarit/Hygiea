<?php

/**
 * Creates a correct mongodb url depending on the arguments specified
 *
 * @author javalsoft
 */
class MongoUrlCreator {
    private $_correctUrl;

    public function __construct($url, $username, $password, $port) {
        $this->_correctUrl = $this->processMongoUrl($url, $username, $password, $port);
    }
    
    public function processMongoUrl($url, $username, $password, $port) {
        $url = \str_replace('mongodb://', '', $url);//prevent double ://
        $url = $this->processMongoAuthentication($url, $username, $password);
        $url = 'mongodb://'.$url;
        return $this->processMongoPort($url, $port);
    }
    
    public function processMongoAuthentication($url, $username, $password) {
        if(strlen($username) === 0 && strlen($password) === 0){
            return $url;
        }
        $indexToInsert = (strpos($url, 'mongodb://') !== -1) ? strpos($url, 'mongodb://') : 0;        
        return substr_replace($url, $username.':'.$password.'@', $indexToInsert, 0);
    }
    
    public function processMongoPort($url, $port) {
        return (strlen($port) !== 0) ? $url.':'.$port : $url.':27017';
    }
    
    function getCorrectUrl() {
        return $this->_correctUrl;
    }


}
