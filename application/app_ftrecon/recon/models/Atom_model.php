<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atom_model
 *
 * @author Lavkush
 */
class Atom_model extends CI_Model {

    public function process($pg_recon_data) {
        echo "Processing PG:Atom Recon Sheet <br/>";

        /*echo "<pre>";
        print_r($pg_recon_data);exit;*/

        $fttxn_id_array = array_column($pg_recon_data, 'Txn Status', 'Merchant Txn ID');
        echo "<pre>";
		print_r($fttxn_id_array);

        /*$fttxn_id_array_unique = array_unique(array_keys($fttxn_id_array));
        echo "<pre>";
		print_r($fttxn_id_array_unique);exit;*/
        
        /*$atom_unique_txn_status = array_unique(array_values($fttxn_id_array));
        echo "<pre>";
		print_r($atom_unique_txn_status);exit;*/

        //get MySQL txn dump from Merchant Txn ID
        /*$query = $this->db->get_where('transactions', array('vTransactionCode' => 'TR1146523'));
        echo "<pre>";
        print_r($query->result());
        exit;*/


        //get mapMatrixStatus from eStatus and Txn Status
    }

}
