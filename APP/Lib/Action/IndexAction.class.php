<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->display();
    }

    public function login()
    {
    	$data = $_GET;
    	echo "<pre>";
    	var_dump($data);

    	$data = $_POST;
    	echo "<pre>";
    	var_dump($data);

    }
}