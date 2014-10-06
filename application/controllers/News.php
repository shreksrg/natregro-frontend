<?php


class News extends FrontController
{
    protected $_typeArr = array('news', 'slide');

    public function __construct()
    {
        parent::__construct();
        $this->_modelNews = CModel::make('news_model');
    }


    public function index()
    {
        $route = $this->input->get('r');
        if (method_exists($this, $route)) {
            $this->{$route}();
        }
    }

    /**
     * 翻阅新闻
     */
    public function turns()
    {
        $actArr = array('prev' => '>', 'next' => '<');
        $type = $this->input->get('t');
        $id = (int)$this->input->get('id');
        $action = $this->input->get('do');
        if (in_array($type, $this->_typeArr) && isset($actArr[$action])) {
            $id = $this->_modelNews->turns($id, $actArr[$action]);
            CAjax::show(0, 'successful', $id);
        }
    }

    public function show()
    {
        $id = (int)$this->input->get('id');
        $route = $this->input->get('r');
        $type = $this->input->get('t');
        $tag = $this->input->get('c');
        if (method_exists($this, $route) && in_array($type, $this->_typeArr)) {
            $data['route'] = $route;
            $data['type'] = $type;
            $data['tag'] = $tag;
            $data['news'] = $this->_modelNews->{$type . 'Detail'}($id);
            if ($data['news'])
                CView::show('news/detail', $data);
        }
    }

    /**
     * 集团介绍
     */
    public function group()
    {
        $catIds = array(15, 16, 17, 30);
        $tag = (int)$this->input->get('tag');
        if ($tag <= 0) $tag = 1;
        $news = $this->_modelNews->page($catIds);
        $newsArr = $this->formatNews($news);
        //d($newsArr);
        CView::show('news/group', array('tag' => $tag, 'news' => $newsArr));
    }

    /**
     * 企业文化
     */
    public function culture()
    {
        $catIds = array(7);
        $news = $this->_modelNews->page($catIds);
        CView::show('news/culture', array('news' => $news));
    }

    /**
     * 新闻公告
     */
    public function announce()
    {
        $page = (int)$this->input->get('page');
        if ($page <= 0) $page = 1;
        $data['catId'] = $catId = 2;
        $limit = array('page' => $page, 'rows' => 6);
        $data['news'] = $this->_modelNews->news($catId, $limit);

        $limit = array('page' => 1, 'rows' => 3);
        $data['slides'] = $this->_modelNews->slides($catId, $limit);
        CView::show('news/announce', $data);
    }

    /**
     * 品牌诠释
     */
    public function brands()
    {
        $tagArr = array('intro' => 21, 'logo' => 19, 'vision' => 20, 'value' => 22, 'story');
        $tag = $this->input->get('tag');
        if (array_key_exists($tag, $tagArr)) {
            $catIds = array($tagArr[$tag]);
            $news = $this->_modelNews->page($catIds);
            //  $newsArr = $this->formatNews($news);
            // d($news);
            CView::show('brand/' . $tag, array('news' => $news));
        }
    }

    /**
     * 产业链
     */
    public function chain()
    {
        $tag = (int)$this->input->get('tag');
        if ($tag <= 0) $tag = 5;
        $catIds = array(24, 25, 26, 27, 28, 29);
        $news = $this->_modelNews->page($catIds);
        $newsArr = $this->formatNews($news);
        CView::show('news/chain', array('tag' => $tag, 'news' => $newsArr));
    }

    /**
     * 诚信曝光
     */
    public function exposure()
    {
        $tag = $this->input->get('c');
        $page = (int)$this->input->get('page');
        if ($page <= 0) $page = 1;
        $tagArr = array('self' => 2, 'line' => 1, 'feed' => 0);
        if (isset($tagArr[$tag])) {
            $data['tag'] = $tag;
            $data['selIndex'] = $tagArr[$tag];
            if ($tag == 'feed') {
                $view = 'form';
            } else {
                $view = 'index';
                if ($tag == 'self') $catId = 9;
                if ($tag == 'line') $catId = 10;
                $data['catId'] = $catId;
                $limit = array('page' => $page, 'rows' => 6);
                $data['news'] = $this->_modelNews->news($catId, $limit);
                $limit = array('page' => 1, 'rows' => 3);
                $data['slides'] = $this->_modelNews->slides($catId, $limit);

            }
            CView::show("exposure/$view", $data);
        }
    }

    /**
     * sns链接
     */
    public function sns()
    {
        $route = $this->input->get('r');
        $tagArr = array('wx' => 0, 'wb' => 1, 'app' => 2);
        if (isset($tagArr[$route])) {
            $view = $route == 'feed' ? 'form' : 'index';
            CView::show("sns/index", array('route' => $route, 'selIndex' => $tagArr[$route]));
        }
    }


    /**
     * 员工活动
     */
    public function active()
    {
        $page = (int)$this->input->get('page');
        if ($page <= 0) $page = 1;
        $data['catId'] = $catId = 12;
        $limit = array('page' => $page, 'rows' => 100);
        $data['actives'] = $this->_modelNews->news($catId, $limit);
        CView::show('news/active', $data);
    }


    public function formatNews($news)
    {
        $newsArr = null;
        if ($news) {
            foreach ($news as $item) {
                $newsArr[$item['catid']] = $item;
            }
        }
        return $newsArr;
    }

}