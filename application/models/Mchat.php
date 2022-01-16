<?php
class Mchat extends CI_Model{
    function getMessage($from, $to, $order = FALSE, $limit = FALSE){
        $where = "sender_id = $from AND reciver_id = $to OR sender_id = $to AND reciver_id = $from";

        if($order){
            $ord = $order;
        }else{
            $ord = 'ASC';
        }

        if($limit){
            $this->db->limit($limit);
        }

        return $this->db->select('')
                        ->from('chat')
                        ->where($where)
                        ->order_by('time', $ord)->get();
    }
}