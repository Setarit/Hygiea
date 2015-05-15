<?php

/**
 * BaseController for all view controllers
 *
 * @author javalsoft
 */
class BaseController {
    protected $_template;

    public function __construct($autoLoader) {
        $this->_template = new Template($autoLoader);
    }
}
