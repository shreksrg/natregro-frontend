<?php


class Product extends FrontController
{
    protected $_modelProduct;

    public function __construct()
    {
        parent::__construct();
        $this->_modelProduct = CModel::get('story_model');
    }


    public function _authentication()
    {
        return true;
    }


    /**
     * 产品列表
     */
    public function index()
    {
        CView::show('product/index');
        return false;
        $offset = 10;
        if (REQUEST_METHOD == 'GET') {
            $data['rows'] = $this->_modelProduct->getRows(0, $offset);
            CView::show('story/index', $data);
        } else {
            $total = (int)$this->input->post('total');
            $rows = $this->_modelProduct->getRows($total, $offset);
            CAjax::show(0, 'successful', $rows);
        }
    }

    public function show()
    {
        CView::show('product/detail');
    }

}