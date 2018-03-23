<?php

/**
 * Description of PGReport
 *
 * @author Lavkush
 */
class PGReport extends MX_Controller {

    public function __construct() {
        parent::__construct();
        ini_set('max_execution_time', 0); // Script will run till all excution gets completed
        ini_set('memory_limit', '2048M'); // Script can take upto 2GB memory space for complete execution
        $this->load->library("fileutility", ['filetype' => 'excel']);
    }

    public function processPGData() {
        $this->processData();
    }

    private function processData() {
        $this->load->helper('directory');

        $dir = FCPATH.'public\\pg_recon_files\\21-03-2018\\';
        $files = directory_map($dir);
        /*echo "<pre>";
        var_dump($files);exit; */

        if (is_array($files)) {
            $pg = '';
            foreach ($files as $pg_file) {
                /* echo "<pre>";
                  var_dump($pg_file);exit; */
                $pg_recon_data = $this->getPGData($dir . $pg_file);
                
                if (stripos($pg_file, 'payu') !== false) {
                    $pg = 'payu';
                } elseif (stripos($pg_file, 'atom') !== false) {
                    $pg = 'atom';
                } elseif (stripos($pg_file, 'billdesk') !== false) {
                    $pg = 'billdesk';
                } elseif (stripos($pg_file, 'icici') !== false) {
                    $pg = 'icici';
                } elseif (stripos($pg_file, 'ola') !== false) {
                    $pg = 'ola';
                } elseif (stripos($pg_file, 'jio') !== false) {
                    $pg = 'jio';
                } elseif (stripos($pg_file, 'freecharge') !== false) {
                    $pg = 'freecharge';
                } elseif (stripos($pg_file, 'upi') !== false) {
                    $pg = 'upi';
                } elseif (stripos($pg_file, 'qrcode') !== false) {
                    $pg = 'qrcode';
                }

                switch ($pg) {
                    case 'payu':
                        $this->load->model('Payu_model', 'payu_model');
                        $this->payu_model->process($pg_recon_data);
                        break;
                    case 'atom':
                        $this->load->model('Atom_model', 'atom_model');
                        $this->atom_model->process($pg_recon_data);
                        break;
                    case 'billdesk':
                        $this->load->model('Billdesk_model', 'billdesk_model');
                        $this->billdesk_model->process($pg_recon_data);
                        break;
                    case 'icici':
                        $this->load->model('ICICINB_model', 'icicinb_model');
                        $this->icicinb_model->process($pg_recon_data);
                        break;
                    case 'jio':
                        $this->load->model('Jiomoney_model', 'jiomoney_model');
                        $this->jiomoney_model->process($pg_recon_data);
                        break;
                    case 'freecharge':
                        $this->load->model('Freecharge_model', 'freecharge_model');
                        $this->freecharge_model->process($pg_recon_data);
                        break;
                    case 'upi':
                        $this->load->model('UPI_model', 'upi_model');
                        $this->upi_model->process($pg_recon_data);
                        break;
                    case 'qrcode':
                        $this->load->model('QRCode_model', 'qrcode_model');
                        $this->qrcode_model->process($pg_recon_data);
                        break;
                    case 'ola':
                        $this->load->model('Olamoney_model', 'olamoney_model');
                        $this->olamoney_model->process($pg_recon_data);
                        break;
                }
            }
        }
        /* echo "<pre>";
          print_r($files);exit; */
    }

    private function getPGData($filePath){
        $xls_data = $this->fileutility->readFile($filePath, $filePath);
        $xls_header = $xls_data[1];

        // echo "<pre>";
        // print_r($xls_header);
        // exit;

        $xls_data_array = [];
        foreach ($xls_data as $row_data) {
            $xls_data_array[] = array_combine($xls_header, $row_data);
        }
        array_shift($xls_data_array);

        /*echo "<pre>";
        print_r($xls_data_array);*/
        return $xls_data_array;
    }

}
