<?php
class Muser extends CI_Model{
    function check($email, $password){
        return $this->db->limit(1)->get_where('users', [
            'email' => $email,
            'password' => md5($password)
        ]);
    }

    function getByid($id){
        return $this->db->select('role.role role_name, users.*')
                        ->from('users')
                        ->join('role', 'users.role = role.id')
                        ->where([
                            'users.id'=> $id
                        ])->limit(1)->get()->row();
    }

    function getCoach(){
        return $this->db->select('users.*')
                        ->from('users')
                        ->where([
                            'role' => 2
                        ])->get();
    }

    function getUserNotCoach(){
        return $this->db->select('users.*')
                        ->from('users')
                        ->where([
                            'role' => 3
                        ])->get();
    }
}