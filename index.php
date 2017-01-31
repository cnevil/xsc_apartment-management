<?php
include ("global.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>辽宁工程技术大学-葫芦岛校区公寓管理网</title>
<link href="css/index_style.css" rel="stylesheet" type="text/css" />
<body>
<div id="main">

	<?php

include ("head.php");
?>

<div id="frist_top">
 <div id="demo_other">
                    <table border=0 align=center cellpadding=1 cellspacing=1 cellspace=0 >
						<tr><td valign=top bgcolor=ffffff id=marquePic3>
             				<table width='100%' border='0' cellspacing='0'>
             					<tr>
             	     			<?php
             	     				$dxtg_sql = "SELECT * FROM `dxtg`";
					 				$dxtg_query=mysql_query($dxtg_sql);
									while($dxtg_rows=mysql_fetch_array($dxtg_query))
									{
             	     			?>
	                 				<td align=center><a href='<?php echo $dxtg_rows[dxtg_tjdz]?>'><img src="dxtg/<?php echo $dxtg_rows[dxtg_url]?>" width="132px" height="108px" border=0></a></td>
	                 				<?php
									}
	                 				?>
								</tr>
							 </table>
							</td>
							<td id=marquePic4 valign=top></td>
							</tr>
						</table>
					</div>
					<script type="text/javascript">
						 var speed=10
						marquePic4.innerHTML=marquePic3.innerHTML
						function Marqueee(){
						if(demo_other.scrollLeft>=marquePic3.scrollWidth){
							demo_other.scrollLeft=0
							  }else{
							demo_other.scrollLeft++
							}
							}
							var MyMarr=setInterval(Marqueee,speed)
							demo_other.onmouseover=function() {clearInterval(MyMarr)}
							demo_other.onmouseout=function() {MyMarr=setInterval(Marqueee,speed)}
					</script>
</div>

	<div id="frist">
		<div id="frist_left">
			<div id="frist_left_first">
				<div id="frist_left_first_left">
					 <table width="336" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
           <tr>
           <td width="336" height="300">
           <?php
           					$xw_sql = "SELECT * FROM `xw`";
					 		$xw_query=mysql_query($xw_sql);
							while($xw_row=mysql_fetch_array($xw_query))
							{
								$xw_url[]=$xw_row[xw_url];
							}
							$xw_sql_name = "SELECT * FROM `xw`";
					 		$xw_query_name=mysql_query($xw_sql_name);
							while($xw_row_name=mysql_fetch_array($xw_query_name))
							{
								$xw_name[]=$xw_row_name[xw_name];
							}

           	?>
           <script type="text/javascript">
            imgUrl1="images/xw_1.jpg";
            imgtext1="<?php echo $xw_name[0]?>"//底边文字
            imgLink1=escape("<?php echo $xw_url[0]?>");
            imgUrl2="images/xw_2.jpg";
            imgtext2="<?php echo $xw_name[1]?>"//底边文字
            imgLink2=escape("<?php echo $xw_url[1]?>");
            imgUrl3="images/xw_3.jpg";
            imgtext3="<?php echo $xw_name[2]?>"//底边文字
            imgLink3=escape("<?php echo $xw_url[2]?>");
            imgUrl4="images/xw_4.jpg";
            imgtext4="<?php echo $xw_name[3]?>"//底边文字
            imgLink4=escape("<?php echo $xw_url[3]?>");
            imgUrl5="images/xw_5.jpg";
            imgtext5="<?php echo $xw_name[4]?>"//底边文字
            imgLink5=escape("<?php echo $xw_url[4]?>");

            var focus_width=336//图片大小也可变
            var focus_height=283
            var text_height=15//设为0的话，没有文字
            var swf_height = focus_height+text_height

            var pics=imgUrl1+"|"+imgUrl2+"|"+imgUrl3+"|"+imgUrl4+"|"+imgUrl5
            var links=imgLink1+"|"+imgLink2+"|"+imgLink3+"|"+imgLink4+"|"+imgLink5
            var texts=imgtext1+"|"+imgtext2+"|"+imgtext3+"|"+imgtext4+"|"+imgtext5

            document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
            document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="images/focus1.swf"><param name="quality" value="high"><param name="bgcolor" value="#F0F0F0">');
            document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
            document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
            document.write('</object>');
            </script> </td>

           </tr>
           </table>
				</div>
				<div id="frist_left_first_right">
								<div id="frist_left_first_right_top">
								<img src="images/gyxx.jpg" width="320" height="25" border="0"   />
								</div>
								<div id="frist_left_first_right_middle">
							<ul>
							<?
							$query=mysql_query("SELECT * FROM `gyxx` ORDER BY `gyxx_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gyxx_content.php?id=<?php echo $row[gyxx_id]?>"><?php echo $row[gyxx_title]=$db->cutstr($row[gyxx_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_first_right_bottom">
								<a href="gyxx.php">更多...</a>
								</div>
				</div>
			</div>
			<div id="frist_left_second">
	<?
							$query=mysql_query("SELECT * FROM `zt` where `id`=1");
							$row=mysql_fetch_array($query);
							?>

	<a href="<?php echo $row[zt_url]?>"><img src="images/zt_1.jpg" width="668" height="100" border="0" alt="<?php echo $row[zt_name]?>"  /></a>
			</div>
			<div id="frist_left_third">
				<div id="frist_left_third_left">
												<div id="frist_left_third_left_top">
												<img src="images/gygl.jpg" width="336" height="25" border="0"   />
								</div>
								<div id="frist_left_third_left_middle">
							<ul>
							<?
							$query=mysql_query("SELECT * FROM `gygl` ORDER BY `gygl_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gygl_content.php?id=<?php echo $row[gygl_id]?>"><?php echo $row[gygl_title]=$db->cutstr($row[gygl_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_third_left_bottom">
								<a href="gygl.php">更多...</a>
								</div>
				</div>
				<div id="frist_left_third_right">
																<div id="frist_left_third_right_top">

<img src="images/gyfw.jpg" width="320" height="25" border="0"   />
								</div>
								<div id="frist_left_third_right_middle">
																<ul>
							<?
							$query=mysql_query("SELECT * FROM `gyfw` ORDER BY `gyfw_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gyfw_content.php?id=<?php echo $row[gyfw_id]?>"><?php echo $row[gyfw_title]=$db->cutstr($row[gyfw_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_third_right_bottom">
								<a href="gyfw.php">更多...</a>
								</div>
				</div>
			</div>

			<div id="frist_left_second">
	<?
							$query=mysql_query("SELECT * FROM `zt` where `id`=2");
							$row=mysql_fetch_array($query);
							?>

	<a href="<?php echo $row[zt_url]?>"><img src="images/zt_2.jpg" width="668" height="100" border="0" alt="<?php echo $row[zt_name]?>"  /></a>
			</div>
			<div id="frist_left_third">
				<div id="frist_left_third_left">
												<div id="frist_left_third_left_top">
												<img src="images/gyaq.jpg" width="336" height="25" border="0"   />
								</div>
								<div id="frist_left_third_left_middle">
							<ul>
							<?
							$query=mysql_query("SELECT * FROM `gyaq` ORDER BY `gyaq_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gyaq_content.php?id=<?php echo $row[gyaq_id]?>"><?php echo $row[gyaq_title]=$db->cutstr($row[gyaq_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_third_left_bottom">
								<a href="gyaq.php">更多...</a>
								</div>
				</div>
				<div id="frist_left_third_right">
																<div id="frist_left_third_right_top">
																<img src="images/gywh.jpg" width="320" height="25" border="0"   />
								</div>
								<div id="frist_left_third_right_middle">
																<ul>
							<?
							$query=mysql_query("SELECT * FROM `gywh` ORDER BY `gywh_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gywh_content.php?id=<?php echo $row[gywh_id]?>"><?php echo $row[gywh_title]=$db->cutstr($row[gywh_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_third_right_bottom">
								<a href="gywh.php">更多...</a>
								</div>
				</div>
			</div>


						<div id="frist_left_second">
	<?
							$query=mysql_query("SELECT * FROM `zt` where `id`=3");
							$row=mysql_fetch_array($query);
							?>

	<a href="<?php echo $row[zt_url]?>"><img src="images/zt_3.jpg" width="668" height="100" border="0" alt="<?php echo $row[zt_name]?>"  /></a>
			</div>

						<div id="frist_left_third">
				<div id="frist_left_third_left">
												<div id="frist_left_third_left_top">
												<img src="images/gydj.jpg" width="336" height="25" border="0"   />
								</div>
								<div id="frist_left_third_left_middle">
							<ul>
							<?
							$query=mysql_query("SELECT * FROM `gydj` ORDER BY `gydj_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gydj_content.php?id=<?php echo $row[gydj_id]?>"><?php echo $row[gydj_title]=$db->cutstr($row[gydj_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_third_left_bottom">
								<a href="gydj.php">更多...</a>
								</div>
				</div>
				<div id="frist_left_third_right">
																<div id="frist_left_third_right_top">
																<img src="images/xjy.jpg" width="320" height="25" border="0"   />
								</div>
								<div id="frist_left_third_right_middle">
																<ul>
							<?
							$query=mysql_query("SELECT * FROM `xjy` ORDER BY `xjy_time` desc LIMIT 0,9");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="xjy_content.php?id=<?php echo $row[xjy_id]?>"><?php echo $row[zczp_title]=$db->cutstr($row[xjy_title],24);?></a></li>
							<?
							}
							?>
							</ul>
								</div>
								<div id="frist_left_third_right_bottom">
								<a href="xjy.php">更多...</a>
								</div>
				</div>
			</div>
		</div>
		<div id="frist_right">
					<div id="frist_right_up">
						<div id="frist_right_up_top">
	<img src="images/tzgg.jpg" width="318" height="25" border="0"   />
						</div>
						<div id="frist_right_up_middle">
																<ul>
							<?
							$query=mysql_query("SELECT * FROM `tzgg` ORDER BY `tzgg_time` desc LIMIT 0,12");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="tzgg_content.php?id=<?php echo $row[tzgg_id]?>"><?php echo $row[tzgg_title]=$db->cutstr($row[tzgg_title],24);?></a></li>
							<?
							}
							?>
							</ul>
						</div>
						<div id="frist_right_up_bottom">
							<a href="tzgg.php">更多...</a>
						</div>
					</div>
					<div id="frist_right_up">
						<div id="frist_right_up_top">
	<img src="images/gzzd.jpg" width="318" height="25" border="0"   />
						</div>
						<div id="frist_right_up_middle">
																<ul>
							<?
							$query=mysql_query("SELECT * FROM `gzzd` ORDER BY `gzzd_time` desc LIMIT 0,12");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="gzzd_content.php?id=<?php echo $row[gzzd_id]?>"><?php echo $row[gzzd_title]=$db->cutstr($row[gzzd_title],24);?></a></li>
							<?
							}
							?>
							</ul>
						</div>
						<div id="frist_right_up_bottom">
							<a href="gzzd.php">更多...</a>
						</div>
					</div>
					<div id="frist_right_up">
						<div id="frist_right_up_top">
<img src="images/yqlj.jpg" width="318" height="25" border="0"   />
						</div>
						<div id="frist_right_up_middle">
<?
$sql="SELECT * FROM `yqlj`";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query)){
	$dz[]=$row[lj_url];
}

?>
							<a href="<?php echo $dz[1]?>"><img src="images/lj_1.jpg" width="318" height="60" border="0" alt=""  /></a>
							<a href="<?php echo $dz[2]?>"><img src="images/lj_2.jpg" width="318" height="60" border="0" alt="<?php echo $dz[2]?>"  /></a>
							<a href="<?php echo $dz[3]?>"><img src="images/lj_3.jpg" width="318" height="60" border="0" alt="<?php echo $dz[3]?>"  /></a>
							<a href="<?php echo $dz[4]?>"><img src="images/lj_4.jpg" width="318" height="60" border="0" alt="<?php echo $dz[4]?>"  /></a>
							<a href="<?php echo $dz[5]?>"><img src="images/lj_5.jpg" width="318" height="60" border="0" alt="<?php echo $dz[5]?>"  /></a>

						</div>

					</div>
					<div id="frist_right_img">

							<a href="mailto:hldgygl@163.com"><img src="images/dzyx.jpg" width="318" height="100" border="0" alt="<?php echo $row[zt_name]?>"  /></a>


					</div>
					<div id="frist_right_img_2">
						<div id="frist_right_up_top">
							<img src="images/lxfs.jpg" width="318" height="25" border="0"   />

						</div>
							<img src="images/lxfs_xs.jpg" width="318" height="225" border="0" alt="<?php echo $row[zt_name]?>"  />


					</div>
					<!--<div id="frist_right_bottom">
												<div id="frist_right_bottom_top">

						</div>
						<div id="frist_right_bottom_middle">
																<ul>
							<?
							$query=mysql_query("SELECT * FROM `gg` ORDER BY `gg_time` desc LIMIT 0,12");
							while($row=mysql_fetch_array($query)){
							?>
								<li><a href="tshd_content.php?id=<?php echo $row[gg_id]?>"><?php echo $row[gg_title]=$db->cutstr($row[gg_title],24);?></a></li>
							<?
							}
							?>
						</div>
						<div id="frist_right_bottom_bottom">
							<a href="tshd.php">更多...</a>
						</div>
					</div>-->
		</div>

	</div>
	<div id="four">

		<?php
		include ("foot.php");

		?>

	</div>
</div>
</body>
</html>