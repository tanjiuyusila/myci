<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login(){
        $this->load->view('login');

    }
    public function regist(){
        $this->load->view('regist');
    }
    public function save(){
//        echo 'save...';
        //1.接收数据
        $name = $this->input->post('username');
        $pwd1 = $this->input->post('pwd1');
        $pwd2 = $this->input->post('pwd2');
        $data = array(
            'name_error' => '用户名不能为空'
        );
        //2.验证
        if($name == ''){
            $this -> load->view('regist',$data); //路由是save，load是加载页面写两次会加载出两个界面
//            redirect("welcome/regist");   //重定向
            //辨析：1.重定向：
            //2.加载：
        }else{
            echo 'success';
        };
    }

//   http://localhost/myci/welcome/login

//   http://localhost/项目名/控制器名/方法名

//   http://127.0.0.1/myci/welcome/regist   修改基础路径之后的访问地址（重新看一下）

}
