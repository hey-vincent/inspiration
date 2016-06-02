<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		//$this->display();
		echo phpinfo();
    }

    public function login()
    {
    	$user_name = $_POST["user_name"];
		$this->assign("usr", $user_name);
		$this->display();
    }
	
	public function sayHello()
	{
		
	}
}