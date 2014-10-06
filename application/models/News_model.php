<?php

/**
 * 新闻模型
 */
class News_model extends App_model
{

    public function news($catId, $limit)
    {
        $rows = $limit['rows'];
        $start = ($limit['page'] - 1) * $rows;
        $sql = "select id,catid,title,thumb,description,inputtime from nato_news where catid=$catId order by listorder, inputtime desc limit $start,$rows";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function slides($catId, $limit)
    {
        $rows = $limit['rows'];
        $start = ($limit['page'] - 1) * $rows;
        $sql = "select id,title,thumb,description,inputtime from nato_news where catid=$catId and posids=1 order by listorder , inputtime desc limit $start,$rows";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function newsDetail($id)
    {
        $sql = "SELECT n1.catid, n1.id,n1.title,n1.description,n1.inputtime,n2.content
                  FROM nato_news AS n1  INNER JOIN nato_news_data AS n2 ON n1.id=n2.id
                  WHERE  n1.id=$id limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function slideDetail($id)
    {
        $sql = "SELECT n1.catid, n1.id,n1.title,n1.description,n1.inputtime,n2.content
                  FROM nato_picture AS n1  INNER JOIN nato_picture_data AS n2 ON n1.id=n2.id
                  WHERE  n1.id=$id limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }


    public function detail($id)
    {
        $sql = "SELECT n1.catid, n1.id,n1.title,n1.description,n1.inputtime,n2.content
                  FROM nato_news AS n1  INNER JOIN nato_news_data AS n2 ON n1.id=n2.id
                  WHERE  n1.id=$id limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function turns($id, $action, $type = 'news')
    {
        $sid = 0;
        $actArr = array('>', '<');
        if (in_array($action, $actArr)) {
            $sql = "select catid from nato_$type where id=$id limit 1";
            $query = $this->db->query($sql);
            if ($query->row()) {
                $catId = (int)$query->row()->catid;
                $sql = "select id from nato_$type where catid=$catId and id{$action}{$id} order by id desc limit 1";
                $query = $this->db->query($sql);
                if ($query->row()) {
                    $sid = (int)$query->row()->id;
                }
            }
        }
        return $sid;
    }

    public function page($catIds)
    {
        $catIds = implode(',', $catIds);
        $sql = "select * from nato_page where catid in($catIds)";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}

