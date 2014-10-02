<?php

/**
 * 招聘模型
 */
class Invite_model extends App_model
{
    public function jobs($type, $limit)
    {
        $rows = $limit['rows'];
        $start = ($limit['page'] - 1) * $rows;
        $sql = "select id,position,department,location from nato_jobs where isdel=0 and status=1 and type=$type  order by create_time desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function detail($id)
    {
        $sql = "select * from nato_jobs where isdel=0 and status=1 and id=$id limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function actives($catId)
    {
        $sql = "select n1.id,n1.title,n1.thumb,n2.content from nato_news n1 inner join nato_news_data n2 on n1.id=n2.id where catid=$catId  order by inputtime desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function activeDetail($catId, $id)
    {
        $sql = "select * from nato_news where  catid=$catId and id=$id limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function train($catId)
    {
        $sql = "select * from nato_page where catid=$catId  limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}



