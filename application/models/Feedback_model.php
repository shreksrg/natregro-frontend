<?php

/**
 * 用户反馈模型
 */
class Feedback_model extends App_model
{
    public function save($post)
    {
        $value = array(
            'name' => $post['name'],
            'phone' => $post['phone'],
            'content' => $post['content'],
        );
        $return = $this->db->insert('nato_feedback', $value);
        return $return;
    }


}



