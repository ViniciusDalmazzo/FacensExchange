<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_trades extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }

    public function addTrade($trade){
        $this->db->insert('trades', $trade);
    }

    public function getTrades($idTrade = false, $idCategory = false){
        $this->db->join('trade_pictures', 'trade_id = trade_pic_idtrade', 'left');
        $this->db->join('categories', 'category_id = trade_id_category', 'left');

        if($idTrade){
            $this->db->where('trade_id', $idTrade);
        }

        if($idCategory){
            $this->db->where('trade_id_category', $idCategory);
        }

        $this->db->order_by('trade_date_add', 'desc');
        $trades = $this->db->get('trades');

        if($trades && $trades->num_rows() > 0){
            if($idTrade){
                return $trades->row();
            }

            return $trades->result();
        }

        return FALSE;
    }

    public function updateTrade($idTrade, $db){
        $this->db->where('trade_id', $idTrade);
        $this->db->update('trades', $db);
    }

    public function insertPicTrade($db){
        $this->db->insert('trade_pictures', $db);
    }

    public function getTradesUser($idUser){
        $this->db->join('trade_pictures', 'trade_id = trade_pic_idtrade', 'left');
        $this->db->where('trade_id_user_from', $idUser);
        $trades = $this->db->get('trades');

        if($trades && $trades->num_rows() > 0){
            return $trades->result();
        }

        return FALSE;
    }

    public function findOfferBySearch($search){
        $this->db->like('trade_title', $search);
        $this->db->join('trade_pictures', 'trade_id = trade_pic_idtrade', 'left');
        $this->db->join('categories', 'category_id = trade_id_category', 'left');
        $this->db->order_by('trade_date_add', 'desc');
        $offers = $this->db->get('trades');

        if($offers && $offers->num_rows() > 0){
            return $offers->result();
        }

        return FALSE;
    }
}