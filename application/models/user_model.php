<?php

class User_model extends CI_Model
{

    public function getRowById($userId)
    {
        $sql = "SELECT * FROM mic_user WHERE isdel=0 and id=$userId";
        $query = $this->db->query($sql);
        return $query->row();
    }

    /**
     * 加密密码
     */
    public function hashPassword($password)
    {
        return md5($password);
    }

    public function getUserByWId($id)
    {
        $sql = "SELECT id FROM mhr_register WHERE isdel=0 and id=$id";
        $query = $this->db->query($sql);
        return $query->row();
    }
}