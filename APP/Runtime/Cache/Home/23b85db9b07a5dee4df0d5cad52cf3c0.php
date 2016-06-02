<?php if (!defined('THINK_PATH')) exit();?><style type = "text/css">

    .btnsubupdate {
        width: 86px;
        height: 30px;
        margin-left:1%;
        float: left;
        padding:5px 10px;
        background-color:#FF5432;
        border-radius:5px;
        width:110px;
        text-align:center;
        color:#fff;
        background-repeat: no-repeat; border: none; cursor: pointer;
    }

    #btnResetSubmit {
        background-color: #2bff47;
        font-weight: bold;
        margin:10px 0px;
        margin-top: 5px;
        border-radius:5px;
        width: 142px; height: 28px;
        border: none; cursor: pointer; text-align:center;color: #fff;}


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>say hello </title>
</head>
<body>
    <p>
        Hello <strong><?php echo ($usr); ?></strong> welcome back.
    </p>




    <div class="tdContent" style="margin:10px 0px;text-align:center;">
                   <a style="cursor:pointer;
                       margin-left:1%;
                       float: left;
                       padding:5px 10px;
                       background-color:#FF5432;
                       border-radius:5px;
                       width:110px;
                       text-align:center;
                       color:#fff;"
                       href="#1">完成手机验证
                   </a>
    </div>
    <div>
        <a style="cursor:pointer;margin-right:70%;float: right;align-items:center;padding:5px 10px;
						background-color:#FF5432;border-radius:5px;width:100px;text-align:center;color:#fff;"
           href="javascript:window.location.href='http://www.baidu.com';">转到百度</a>
    </div>



    <input value="完成并继续" class="btnsubupdate" id="btnAdd" type="button" >
    <button type="button" class="btnsubupdate"  onclick="localhost">完成并继续</button>

    <input id="btnResetSubmit" value=" 完成验证" type="button">

</body>
</html>