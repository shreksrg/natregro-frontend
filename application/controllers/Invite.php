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
        if ($route == 'list') {
            CView::show('invite/active_list');
        }
        if ($route == 'show') {
            CView::show('invite/active_detail');
        }

    }

    public function contact()
    {
        CView::show('invite/contact');
    }
}