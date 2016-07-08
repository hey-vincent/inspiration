<?php

class ToolsAction extends Action{
    public function index()
    {
        $this->display();
    }
    
    public function getMd5()
    {
        $des = md5($_POST['src']);
        ajaxmsg($des,0);
    }
    
    //genderating a captcha code
    public function getCaptcha()
    {
        import('ORG.Util.Image');
		ob_end_clean();
		Image::buildImageVerify(4,1,'png',120,33,'verifycode');
        
    }
    
    
    public function checkCap()
    {
        $cap_code = $_POST['cap'];
        $res = "";
        $res = md5($cap_code) . "  vs  " .$_SESSION['verifycode'];
        //ajaxmsg($res, 0);
        if(md5($cap_code) != $_SESSION['verifycode']){
            ajaxmsg("not match" , -1);
        }else{
             ajaxmsg("match" , 0);
        }
    }
    
    public function showSession()
    {
        var_dump($_SESSION); 
    }
	
	private function pri()
	{
		echo "Well. I'm a private function. You cannot access me outside this class";
	}
	
	public function pub()
	{
		$this->pri();
		echo "<br>But you can call me through a public function. Actually you should have to use \$this";
	}
	
	public function test()
	{
		$str = "411523199102193510";
		$res = hideInfo($str , 4,4);
		var_dump($res);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}