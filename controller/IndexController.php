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
        var_dump($this);
    }
}
