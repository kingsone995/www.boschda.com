<?php
//include("../config.php");
//header("Content-type:image/jpg");
//$im=imagecreatefromjpeg("./statics/default/img/bg_header_t.jpg");
//imagejpeg($im);
//imagedestroy($im);
phpinfo();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<!--   <meta http-equid="Content-Type" content="text/html; charset=utf-8" /> -->
<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />  -->

<title>宁波博视达焊接机器人有限公司</title>

<!-- <link href="statics/default/css/base.css"  rel="stylesheet" media="screen" type="text/css" />  -->
<!-- <link href="statics/default/css/bcstyle.css"  rel="stylesheet" media="screen" type="text/css" /> -->
<!-- <link href="statics/default/css/css.css"  rel="stylesheet" type="text/css" /> -->

    <link href="statics/default/css/layout.css"  rel="stylesheet" type="text/css" />

</head>

<body>
<!--头部文件-->

<div id="header">
 <!-- <div id="headerfont">中文 | English</div>
    <div id="headerreg">中文 | English</div>  -->

    <div id = "navhead">
        <ul>
            <li><a href="#">中文</a><li>
            <li> | <li>
            <li><a href="#">English</a><li>
            <li> <li>
            <li> <li>
            <li> <li>

            <li><a href="#">登录</a><li>
            <li>|<li>
            <li><a href="register.php">注册</a><li>

        </ul>

    </div>


</div>

<div id="header1">
    <div id="header1logo"><img src="statics/default/img/logo.jpg"></div>
    <div id="nav">
        <ul>
            <li><a href="#">首页</a><li>
            <li><a href="#">走进博视达</a><li>
            <li><a href="#">产品系列</a><li>
            <li><a href="#">行业应用</a><li>
            <li><a href="#">产业资讯</a><li>
            <li><a href="#">联系我们</a><li>
        </ul>
    </div>
</div>


<div id="img-box">

        <img id = "d2" src = "statics/default/img/1.jpg" />;
</div>
<script type="text/javascript">
    var i=1;

    var iTarget;
    var oImg = document.getElementById("d2");
    function f(){
        /*jianyin*/
        var timer = null;

        var alpha = 100;
        clearInterval(timer);
        iTarget = 20;
        timer = setInterval( function (){

            var speed = 0;                //设置透明度变化的速度
            if(alpha < iTarget){
                speed = 1;　　　　　　//透明度小于目标值，则将变化的速度设为正值
            }else{
                speed = -1;
            }
            if(alpha==iTarget){
                clearInterval(timer);        //如果达到目标透明度，则清除定时器,否则定时器不会消除，没有效果
                i++;
                if(i>3) i=1;
                /* document.getElementById('d1').style.backgroundPosition='left '+(-1*i*20)+'px';*/
                oImg.src= 'statics/default/img/' + i +'.jpg';
                display();

            }else{
                alpha+=speed;
                oImg.style.filter = 'alpha(opacity:'+alpha+')';        //为了兼容IE浏览器
                oImg.style.opacity = alpha/100;
                //document.title = alpha;        //主要是为了测试，在标题上显示透明度
            }
        }, 10);
    }

    function display() {
        /*jianyin*/
        var timer = null;
        var alpha = 20;
        clearInterval(timer);
        iTarget = 100;
        timer = setInterval(function () {

            var speed = 0;                //设置透明度变化的速度
            if (alpha < iTarget) {
                speed = 1;　　　　　　//透明度小于目标值，则将变化的速度设为正值
            } else {
                speed = -1;
            }
            if (alpha == iTarget) {
                clearInterval(timer);        //如果达到目标透明度，则清除定时器,否则定时器不会消除，没有效果
            } else {
                alpha += speed;
                oImg.style.filter = 'alpha(opacity:' + alpha + ')';        //为了兼容IE浏览器
                oImg.style.opacity = alpha / 100;
                //document.title = alpha;        //主要是为了测试，在标题上显示透明度
            }
        }, 10);
    }

    window.setInterval(f, 6000);    //每秒切换

</script>


<!--
<link href="statics/default/css/banner.css" rel="stylesheet" type="text/css">

<div class="shd pr"  id="container">
    <div class="banner-box">
        <div class="bd">
            <ul>
                <li style="background:url(statics/default/img/1.jpg) no-repeat center top">
                    <div class="m-width">
                        <a href="javascript:void(0);"></a>
                    </div>
                </li>
                <li style="background:url(statics/default/img/11.jpg) no-repeat center top">
                    <div class="m-width">
                        <a href="javascript:void(0);"></a>
                    </div>
                </li>
                <li style="background:url(statics/default/img/22.jpg) no-repeat center top">
                    <div class="m-width">
                        <a href="javascript:void(0);"></a>
                    </div>
                </li>


            </ul>
        </div>
        <div class="banner-btn">
            <a class="prev" href="javascript:void(0);"></a>
            <a class="next" href="javascript:void(0);"></a>
            <div class="hd"><ul></ul></div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){

            $(".prev,.next").hover(function(){
                $(this).stop(true,false).fadeTo("show",0.9);
            },function(){
                $(this).stop(true,false).fadeTo("show",0.4);
            });

            $(".banner-box").slide({
                titCell:".hd ul",
                mainCell:".bd ul",
                effect:"fold",
                interTime:3500,
                delayTime:500,
                autoPlay:true,
                autoPage:true,
                trigger:"click"
            });

        });
    </script>
</div>
-->

<div id="wrapper">
    <div id="content_area">CONTENT</div>
    <div id="left_side">LEFT SIDE</div>
    <div id="right_side">RIGHT SIDE</div>
</div>
<div id="footer">FOOTER</div>
</body>


<?php
/*
 * Created by PhpStorm.
 * User: wangyigang
 * Date: 2017/11/1
 * Time: 下午3:16
 */
//require_once'PHPUnit/Framework.php';
//echo "Hello world!";
//phpinfo();
//header("Content-type:image/gif");
//header("Content-type: image/gif");
//$im = imagecreate(200, 60);
//$white = imagecolorallocate($im, 225, 66, 159);
//imagegif($im);
?>
