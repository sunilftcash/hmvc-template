<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UPI_model
 *
 * @author Lavkush
 */
class UPI_model extends CI_Model {

    public function process($pg_recon_data) {
        
    	echo "Processing PG:UPI Recon Sheet <br/>";
    	/*echo "<pre>";
        print_r($pg_recon_data);exit;*/

        $fttxn_id_array = array_column($pg_recon_data, 'status', 'merchantTranID');
        echo "<pre>";
		print_r($fttxn_id_array);

        /*$fttxn_id_array_unique = array_unique(array_keys($fttxn_id_array));
        echo "<pre>";
		print_r($fttxn_id_array_unique);exit;*/
        
        /*$upi_unique_txn_status = array_unique(array_values($fttxn_id_array));
        echo "<pre>";
		print_r($upi_unique_txn_status);exit;*/

        //get MySQL txn dump from merchantTranID
        /*$query = $this->db->get_where('transactions', array('vTransactionCode' => 'TR1146523'));
        echo "<pre>";
        print_r($query->result());
        exit;*/

        //get mapMatrixStatus from eStatus and status
    }

}
