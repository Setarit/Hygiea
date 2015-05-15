<?php

/**
 * Responsible for loading the template and its contents
 *
 * @author javalsoft
 */
class Template {
    private $_autoLoader;
    
    private $_pageName;
    private $_sideNavigation;
    private $_userNavigation;
    private $_pageContent;
    
    function __construct($autoLoader) {
        $this->_autoLoader = $autoLoader;
    }

    function getPageName() {
        return $this->_pageName;
    }

    function getSideNavigation() {
        return $this->_sideNavigation;
    }

    function getUserNavigation() {
        return $this->_userNavigation;
    }

    function getPageContent() {
        return $this->_pageContent;
    }

    function setPageName($_pageName) {
        $this->_pageName = $_pageName;
    }

    function setSideNavigation($_sideNavigation) {
        $this->_sideNavigation = $_sideNavigation;
    }

    function setUserNavigation($_userNavigation) {
        $this->_userNavigation = $_userNavigation;
    }

    function setPageContent($_pageContent) {
        $this->_pageContent = $_pageContent;
    }

    public function render() {
        include ($this->_autoLoader->getLayout());
    }
}
