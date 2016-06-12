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
		if($isset($_COOKIE['user']))
		{
			echo "Welcome back" . "<br>";
			dump($_COOKIE);
		}
		else
		{
			echo "Welcome to my site";
			setcookie('user','Vin',time() + 24*3600);
			dump($_COOKIE);
		}
	}
}