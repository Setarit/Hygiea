<?php
/**
 * Default controller
 *
 * @author javalsoft
 */
class IndexController extends BaseController{
    
    function __construct($autoLoader) {
        parent::__construct($autoLoader);
    }
    
    public function index() {
        $this->_template->setPageName("Hygiea");
        $this->_template->render();
    }
}
