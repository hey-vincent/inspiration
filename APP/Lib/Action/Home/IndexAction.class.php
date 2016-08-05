<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->assign("php_pass",'I was passed from back_end');
		$this->assign("show", false);
		$this->display("home");
    }

    public function login()
    {
    	$status_arr = array('待审核', '审核通过,处理中', '已提现', '审核未通过','提现取消');
    	
    	$src = "刘文胜";
    	$res = hideInfo($src,1,0);
    	var_dump($res);
		$this->display();
    }
	
	public function sayHello()
	{
		if(isset($_COOKIE['user']))
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
    
    
    public function tools()
    {
        $this->display();
    }
}