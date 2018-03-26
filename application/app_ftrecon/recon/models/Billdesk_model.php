<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Billdesk_model
 *
 * @author Lavkush
 */
class Billdesk_model extends CI_Model {

    public function process($pg_recon_data) {

    	echo "Processing PG:Billdesk Recon Sheet <br/>";
        echo "<pre>";
        print_r($pg_recon_data);
        //get MySQL txn dump from Ref1

        //get mapMatrixStatus from eStatus and Status
    }

}
