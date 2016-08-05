<?php
/**
 * Created by PhpStorm.
 * User: vincentliu
 * Date: 16/6/2
 * Time: 上午11:05
 */


// 将UTC时间转换成当日凌晨零点时间
//2014-08-16 :23:34:12 =>2014-08-16 0:0:0
function changeTimeToZeroOclock($utcTime='')
{
    $zeroClock = -1;
    $tm = date("Y-m-d 0:0:0" , $utcTime);
    dump($tm);
    $zeroClock = strtotime($tm);
    return $zeroClock;

    /*//testing code
    dump($zeroClock);
    dump(date("Y,m,d H:i:s",$zeroClock));
    */
}


// ajax 回应
function ajaxmsg($msg="",$type=1,$is_end=true)
{
      $json['status'] = $type;
      if(is_array($msg)){
		  foreach($msg as $key=>$v){
			 $json[$key] = $v;
		  }
      }elseif(!empty($msg)){
         $json['message'] = $msg;
      }
      if($is_end){
			  ob_end_clean();
			  echo json_encode($json);
			  exit;
		  }else{
			  ob_end_clean();
			  echo json_encode($json);
			  exit;
		  }
}

/**
+----------------------------------------------------------
 * author: Liu Wensheng
 * 隐藏敏感信息，如手机号 137123145678 => 137****5678
+----------------------------------------------------------
 * @param $src      待处理串
 * @param $head_len 头部保留长度
 * @param $tail_len 尾部保留长度
 * @param $pad_str  替换字符
+----------------------------------------------------------
 * @return 处理后的串（副本）
+----------------------------------------------------------
 */
function hideInfo($src, $head_len, $tail_len, $pad_str="*")
{
   $arSplit = array();
    $arSplit = str_split($src);
    var_dump($arSplit);
    $bitLen = strlen($arSplit[0]);
    if ($bitLen <= 0){
      return "";
    }

    $len = strlen($src);
    $head_len *= $bitLen;
    $tail_len *= $bitLen;

    if ( empty($src) || strlen($src) <=0        // 空串 直接返回
      || $len < $head_len || $len < $tail_len //不按套路出牌 返回
      || $len <($head_len + $tail_len) ){
      return "";
    }

    // 头部串
    $head = substr($src,0, $head_len);
    // 尾部串
    $tail = substr($src,0-$tail_len, $tail_len);
    // 中间串
    $midl = str_pad('', ($len - $head_len - $tail_len)/$bitLen, $pad_str);
  
    // 返回组合
    return $head . $midl . $tail;
}


