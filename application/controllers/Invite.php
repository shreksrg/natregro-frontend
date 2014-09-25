<?php

class Invite extends FrontController
{
    public function index()
    {
        CView::show('invite/index');
    }

    public function show()
    {
        CView::show('invite/detail');
    }

    public function active()
    {
        $route = $this->input->get('r');
        $actArr=array('list','show');
        if(in_array($route,$actArr)){
            CView::show('invite/active_'.$actArr[$route]);
        }
    }

    public function contact()
    {
        CView::show('invite/contact');
    }
}