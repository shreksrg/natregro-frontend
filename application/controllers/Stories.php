<?php


class Stories extends FrontController
{
    protected $_modelStory;

    public function __construct()
    {
        $this->_modelStory = CModel::get('story_model');
    }


    public function _authentication()
    {
        return true;
    }


    /**
     *故事列表
     */
    public function index()
    {
        $offset = 10;
        if (REQUEST_METHOD == 'GET') {
            $data['rows'] = $this->_modelStory->getRows(0, $offset);
            CView::show('story/index', $data);
        } else {
            $total = (int)$this->input->post('total');
            $rows = $this->_modelStory->getRows($total, $offset);
            CAjax::show(0, 'successful', $rows);
        }
    }

    /**
     * 新增故事
     */
    public function append()
    {
        $sessionKey = '_story_token_new';

        //获取用户微信ID
        $modelLogin = CModel::make('login_model');
        $openId = $modelLogin->getOpenID();
        if (!$openId) CView::show('message/error');

        //检查该用户微信ID是否已经注册
        $modelReg = CModel::make('register_model');
        $rowReg = $modelReg->getRow(array('wxid' => $openId), 'create_time', 1);
        if (!$rowReg) {
            header("location:" . APP_URL . '/register');
            return false;
        }

        if (REQUEST_METHOD == 'POST') {
            $content = $this->input->post('content', true);
            $token = $this->input->post('token');
            $show['view'] = 'message/error';
            $show['message'] = array('code' => -1, 'content' => '故事提交失败');
            if ($token && $_SESSION[$sessionKey] === $token && $content) {
                $return = $this->_modelStory->append($this->_user->id, $content);
                if ($return === true) {
                    $show['view'] = 'message/info';
                    $show['message'] = array('code' => 0, 'content' => '故事提交成功');
                }
                unset($_SESSION[$sessionKey]);
            }
            CView::show($show['view'], $show['message']);
        } else {
            $token = $_SESSION[$sessionKey] = UUID::fast_uuid();
            CView::show('story/form', array('token' => $token));
        }
    }

    /**
     * 故事评价：用鲜花或鸡蛋表达
     */
    public function appraise()
    {
        $id = (int)$this->input->get('id');
        $type = (int)$this->input->get('type');
        $return = $this->_modelStory->appraise($id, $type);
        CAjax::result($return);
    }
}