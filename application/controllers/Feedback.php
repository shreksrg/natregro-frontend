<?php

/**
 * 用户反馈
 */
class Feedback extends FrontController
{
    protected $_modelInvite;

    public function __construct()
    {
        parent::__construct();
        $this->_modelFeed = CModel::make('feedback_model');
    }

    public function index()
    {
        CView::show('exposure/feedback');
    }

    /**
     * 验证码
     */
    public function captcha()
    {
        Micro::import('application.libraries.captcha.*');
        $captcha = new ENS1Captcha();
        $captcha->doimg();
        CSession::set('_feedback_code', $captcha->getCode());
    }


    public function save()
    {
        $post = $this->input->post();
        if ($post['captcha'] !== CSession::get('_feedback_code')) {
            CAjax::fail();
            exit;
        }
        CSession::drop('_feedback_code');
        $return = $this->validate($post);
        if (!$return) {
            CAjax::show(-2, 'fail');
            exit;
        }
        $return = $this->_modelFeed->save($post);
        CAjax::result($return);
    }

    /**
     * 验证表单
     */

    protected function  validate()
    {
        $validator = FormValidation::make();
        $validator->set_rules('name', 'Name', 'required|xss_clean');
        $validator->set_rules('phone', 'Phone', 'required|xss_clean');
        $validator->set_rules('content', 'Content', 'required|xss_clean');
        return $validator->run() === true;
    }


}