<?php


class News extends FrontController
{
    protected $_modelNews;

    public function __construct()
    {
        parent::__construct();
        $this->_modelNews = CModel::make('news_model');
    }

    public function index()
    {
        $page = (int)$this->input->get('page');
        $catId = 17;
        $limit = array('page' => $page, 'rows' => 6);
        $data['rows'] = $this->_modelNews->news($catId, $limit);
        CView::show('news/enterprise', $data);
    }

    public function search()
    {
        $actArr = array('prev'=>'>', 'next'=>'<');
        $id = (int)$this->input->get('id');
        $action = $this->input->get('do');
        if (isset($actArr[$action])) {
            $id = $this->_modelNews->search($id, $actArr[$action]);
            CAjax::show(0, 'successful', $id);
        }
    }

    public function show()
    {
        $id = (int)$this->input->get('id');
        $data['news'] = $this->_modelNews->detail($id);
        if ($data['news'])
            CView::show('news/detail', $data);
    }

    /**
     * 集团介绍
     */
    public function group()
    {
        $tag = (int)$this->input->get('tag');
        if ($tag <= 0) $tag = 1;
        CView::show('news/group', array('tag' => $tag));
    }

    /**
     * 企业文化
     */
    public function culture()
    {
        CView::show('news/culture');
    }

    /**
     * 新闻公告
     */
    public function announce()
    {
        $page = (int)$this->input->get('page');
        if ($page <= 0) $page = 1;
        $catId = 2;
        $limit = array('page' => $page, 'rows' => 6);
        $data['news'] = $this->_modelNews->news($catId, $limit);

        $catId = 4;
        $limit = array('page' => $page, 'rows' => 3);
        $data['slides'] = $this->_modelNews->slides($catId, $limit);
        CView::show('news/announce', $data);
    }

    /**
     * 品牌
     */
    public function brands()
    {
        $tagArr = array('intro', 'logo', 'vision', 'value', 'story');
        $tag = $this->input->get('tag');
        if (in_array($tag, $tagArr)) {
            CView::show('brand/' . $tag);
        }
    }

    /**
     * 产业链
     */
    public function chain()
    {
        $tag = (int)$this->input->get('tag');
        if ($tag <= 0) $tag = 5;
        CView::show('news/chain', array('tag' => $tag));
    }


}