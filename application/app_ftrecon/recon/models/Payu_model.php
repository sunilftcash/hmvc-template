<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payu_model
 *
 * @author Lavkush
 */
class Payu_model extends CI_Model {

    public function process($pg_recon_data) {

        echo "Processing PG:Payu Recon Sheet <br/>";
        echo "<pre>";
        print_r($pg_recon_data);
        //get MySQL txn dump from Transaction ID

        //get mapMatrixStatus from eStatus and Status
    }

}
