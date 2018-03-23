<?php

/**
 * Description of Recon_dprocess
 *
 * @author ftcash
 */
class Recon_dprocess extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library("fileutility", ['filetype' => 'excel', 'ext' => 'xlsx']);
        $filename = "C:\\Users\\ftcash\\Downloads\\Ftrecon Files\\22-03-2018\\Payu Transaction.xlsx";
        $xls_data = $this->fileutility->readFile($filename);
        $xls_header = $xls_data[1];
//        echo "<pre>";
//        print_r($xls_header);
//        exit;
        $xls_data_array = [];
        foreach ($xls_data as $row_data) {
            $xls_data_array[] = array_combine($xls_header, $row_data);
        }
        echo "<pre>";
        print_r($xls_data_array);
        exit;
    }

}
