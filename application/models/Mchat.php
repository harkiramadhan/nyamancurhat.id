<?php
class Mchat extends CI_Model{
    function getMessage($from, $to){
        $where = "sender_id = $from AND reciver_id = $to OR sender_id = $to AND reciver_id = $from";

        return $this->db->select('')
                        ->from('chat')
                        ->where($where)
                        ->order_by('time', "ASC")->get();
    }
}