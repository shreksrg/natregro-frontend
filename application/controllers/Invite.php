<?php

class Invite extends FrontController
{
    protected $_modelInvite;

    public function __construct()
    {
        parent::__construct();
        $this->_modelInvite = CModel::make('invite_model');
    }

    public function index()
    {
        CView::show('invite/index');
    }


    public function jobs()
    {
        $tag = $this->input->get('t');
        $tagArr = array('campus' => 1, 'public' => 0);
        if (array_key_exists($tag, $tagArr)) {
            $page = (int)$this->input->get('page');
            if ($page <= 0) $page = 1;
            $type = $tagArr[$tag];
            $limit = array('page' => $page, 'rows' => 0);
            $data['jobs'] = $this->_modelInvite->jobs($type, $limit);
            $list = CView::show('invite/list', $data, true);
            CAjax::show(0, 'successful', $list);
        }
    }

    public function show()
    {
        $id = $this->input->get('id');
        $data['job'] = $job = $this->_modelInvite->detail($id);
        if ($job)
            CView::show('invite/detail', $data);
    }

    /**
     * 员工活动
     */
    public function active()
    {
        $catId = 12;
        $data['actives'] = $this->_modelInvite->actives($catId);
        CView::show('invite/active', $data);
    }

    /**
     * 员工发展与培养
     */
    public function train()
    {
        $catId = 13;
        $data['train'] = $this->_modelInvite->train($catId);
        CView::show('invite/train', $data);
    }

    public function contact()
    {
        $catIds = array(31);
        $modelNews = CModel::make('news_model');
        $contact = $modelNews->page($catIds);
        CView::show('invite/contact', array('contact' => $contact));
    }

    /**
     * 简历投递
     */
    public function resume()
    {
        if (REQUEST_METHOD == 'POST') {
            Micro::import('application.libraries.uploader.*');
            $fieldName = 'attachment'; //表单文件域
            $jobId = (int)$this->input->post('job_id');
            if ($jobId > 0) {
                $row = $this->_modelInvite->detail($jobId);
                if (!$row) {
                    echo 'job is not exists';
                    return false;
                }
                $uploader = new ResumeUploader($fieldName);
                $uploader->initFile();
                $return = $uploader->upload();
                if (!$return) {
                    echo 'submit fail';
                    return false;
                }
                $files = $uploader->getTargetFiles();
                $data = array('jobId' => $jobId, 'attachment' => $files[$fieldName]);
                $this->_modelInvite->appendResume($data);
                echo 'submit completed ,thank you!';
            } else return false;
        } else {
            CView::show('invite/resume');
        }
    }
}