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

        /*echo "<pre>";
        print_r($pg_recon_data);exit;*/

        $fttxn_id_array = array_column($pg_recon_data, 'Status', 'Ref1');
        echo "<pre>";
		print_r($fttxn_id_array);

        /*$fttxn_id_array_unique = array_unique(array_keys($fttxn_id_array));
        echo "<pre>";
		print_r($fttxn_id_array_unique);exit;*/
        
        /*$billdesk_unique_txn_status = array_unique(array_values($fttxn_id_array));
        echo "<pre>";
		print_r($billdesk_unique_txn_status);exit;*/

        //get MySQL txn dump from Ref1
        /*$query = $this->db->get_where('transactions', array('vTransactionCode' => 'TR1146523'));
        echo "<pre>";
        print_r($query->result());
        exit;*/

        //get mapMatrixStatus from eStatus and Status
    }

}
