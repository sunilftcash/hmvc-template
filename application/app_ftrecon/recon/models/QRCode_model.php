<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QRCode_model
 *
 * @author Lavkush
 */
class QRCode_model extends CI_Model {

    public function process($pg_recon_data) {
        
    	echo "Processing PG:QRCode Recon Sheet <br/>";
    	echo "<pre>";
        print_r($pg_recon_data);
    }

}
