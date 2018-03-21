<?php
/**
 * Description of Dummy
 *
 * @author Sunil Ftcash
 */
class Dummy extends MX_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        echo "hello world DUMMY!<br>";
        $msgObj = Modules::load("msg/msgr");
        var_dump($msgObj,$msgObj->test());exit;
    }
}
