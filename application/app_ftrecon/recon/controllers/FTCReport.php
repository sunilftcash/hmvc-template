<?php

/**
 * Description of FTCReport
 *
 * @author Lavkush
 */
class FTCReport extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('FTCReport_model','ftcreport_model');
        $data['content'] = $this->ftcreport_model->process('excelsheet');
        $this->load->view('ftc_report_view', $data);
    }

}
