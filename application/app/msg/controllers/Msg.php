<?php

/**
 * Description of Msg
 *
 * @author Sunil Ftcash
 */
class Msg extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function test() {
        return ['hello' => 'loaded'];
    }

}
