<?php

class Register extends FrontController
{

    /**
     * @var 登记模型
     */
    protected $_modelRegister;

    /**
     * @var 登记项目
     */
    protected $_regItem = array('gender', 'mobile', 'academy', 'major');

    public function __construct()
    {
        parent::__construct();
        $this->_modelRegister = CModel::make('register_model');
        $this->_session_prefix_key = base64_encode('_microHR_register');
    }

    /**
     * 用户身份验证
     */
    public function _authentication()
    {
        if ($this->_user->isGuest) {
            $modelLogin = CModel::make('login_model');
            $return = $modelLogin->authLogin($this->_user); //申请授权并登录
            if ($return !== true) {
                CAjax::result($return);
                exit(0);
            }
        }
    }

    public function index()
    {
        /*$route = $this->input->get('r');
        $method = 'reg' . ucfirst($route);
        if (method_exists($this, $method)) {
            call_user_func_array(array($this, $method), array());
        }*/

        ////
        if (REQUEST_METHOD == 'POST') {
            $return = false;
            $post = $this->input->post();
            if ($this->validateForm($post) === true) {
                //授权验签，获取用户微信ID
                $modelLogin = CModel::make('login_model');
                $openID = $modelLogin->openID;
                if ($modelLogin->openID) {
                    $post['wxid'] = $openID;
                    $return = $this->doRegister($post);
                }
            }
            CAjax::result($return);
        } else {
            CView::show('register/index');
        }
    }

    /**
     * 验证表单
     */

    protected function  validateForm()
    {
        $validator = FormValidation::make();
        $validator->set_rules('nickname', 'Nickname', 'required|xss_clean');
        //   $validator->set_rules('wxid', 'Wxid', 'required|xss_clean');
        $validator->set_rules('gender', 'Gender', 'required|integer|xss_clean');
        $validator->set_rules('mobile', 'Mobile', 'required|integer|max_length[13]|numeric|xss_clean');
        $validator->set_rules('academy', 'Academy', 'required|xss_clean');
        $validator->set_rules('major', 'Major', 'required|xss_clean');
        return $validator->run() === true;
    }


    protected function doRegister($data)
    {
        $return = $this->_modelRegister->save($data);
        return $return;
    }


    /**
     * 注册性别
     */
    protected function regGender()
    {
        if (REQUEST_METHOD == 'POST') {
            $gender = (int)$this->input->post('gender');
            $this->setSession('gender', $gender);
            CAjax::show(0, 'successful');
        } else {
            CView::show('register/reg_gender');
        }
    }

    /**
     * 注册手机
     */
    protected function regMobile()
    {
        if (REQUEST_METHOD == 'POST') {
            $mobile = (int)$this->input->post('mobile');
            $this->setSession('mobile', $mobile);
            CAjax::show(0, 'successful');
        } else {
            CView::show('register/reg_mobile');
        }
    }

    /**
     * 注册院校专业
     */
    protected function regMajor()
    {
        if (REQUEST_METHOD == 'POST') {
            $academy = $this->input->post('academy', true);
            $major = $this->input->post('major', true);
            $this->setSession('academy', $academy);
            $this->setSession('major', $major);
            //保存注册
            $return = $this->regSave();
            CAjax::result($return);
        } else {
            CView::show('register/reg_gender');
        }
    }

    /**
     * 保存注册
     */
    protected function regSave()
    {
        $data = array();
        //检查登记步骤
        foreach ($this->_regItem as $item) {
            if (!isset($regArr[$item]) || strlen($regArr[$item]) <= 0) {
                return false;
            }
            $data[$item] = $this->getSession($item);
        }
        //写入注册数据
        $return = $this->_modelRegister->save($data);
        return $return;
    }
}