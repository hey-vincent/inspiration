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
