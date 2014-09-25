<?php


class Welcome extends FrontController
{
    public function index()
    {
       CView::show('index');
    }
}