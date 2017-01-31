<?php
session_start();
srand((double)microtime()*1000000);//设置随机数的种子
$im=imagecreate(45,18); //im：验证码图片；设置一个45*18像素的画布
$black=imagecolorallocate($im,0,0,0); //设置black的颜色范围
$white=imagecolorallocate($im,255,255,255);//设置white的颜色范围
$gray=imagecolorallocate($im,200,200,200);//设置gray的颜色范围
imagefill($im,0,0,$gray);//区域填充，在im图像的坐标x,y（0，0）处用gray颜色执行区域填充
session_register("autonum");//注册一个新的变量（autonum）到session中
$_SESSION["autonum"]="";
for($i=0;$i<4;$i++){//循环输出一个4位的随机数
//mt_rand()作用：取得乱数值。
$str=mt_rand(1,6); //产生1-6的随机数，用来指定验证码字体
$size=mt_rand(3,6); //用来产生3-6的随机数，用来指定每位验证码数字的高度
$authnum=dechex(mt_rand(0,15));//产生0-9的随机数，用来显示验证码数字
$_SESSION["autonum"].=$authnum;//将验证码连接成字符串保存在session变量autonum中
imagestring($im,$size,(5+$i*10),$str,$authnum,imagecolorallocate($im,rand(0,130),rand(0,130),rand(0,130)));
//imagestring:水平地绘制一行字符串。整句的作用是：显示验证码数字
}
for($i=0;$i<200;$i++){//在创建的图片中显示点
$randcolor=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
imagesetpixel($im,rand()%70,rand()%30,$randcolor);
}
imagepng($im);
echo $authnum;//以png格式输出验证码图片
imagedestroy($im);//释放关联内存
?>
