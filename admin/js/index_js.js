function check() {
if(document.adminlogin.adminname.value=="")
{
     alert("用户名不能为空");
     document.adminlogin.adminname.focus();
	 return false;
}
else if(document.adminlogin.adminpasswd.value=="")
{
	 alert("密码不能为空");
     document.adminlogin.adminpasswd.focus();
	 return false;

}
else if(document.adminlogin.yzm.value=="")
{
	 alert("验证码不能为空");
     document.adminlogin.yzm.focus();
	 return false;

}
else if(document.adminlogin.dlsave.value=="")
{
	 alert("登录方式不能为空");
     document.adminlogin.dlsave.focus();
	 return false;

}
else
{
	 return true;
}
}
function correctPNG()
{
    var arVersion = navigator.appVersion.split("MSIE")
    var version = parseFloat(arVersion[1])
    if ((version >= 5.5) && (document.body.filters))
    {
       for(var j=0; j<document.images.length; j++)
       {
          var img = document.images[j]
          var imgName = img.src.toUpperCase()
          if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
          {
             var imgID = (img.id) ? "id='" + img.id + "' " : ""
             var imgClass = (img.className) ? "class='" + img.className + "' " : ""
             var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
             var imgStyle = "display:inline-block;" + img.style.cssText
             if (img.align == "left") imgStyle = "float:left;" + imgStyle
             if (img.align == "right") imgStyle = "float:right;" + imgStyle
             if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
             var strNewHTML = "<span " + imgID + imgClass + imgTitle
             + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
             + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
             + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
             img.outerHTML = strNewHTML
             j = j-1
          }
       }
    }
}
function refresh()
{
	var url="yanzhengma.php?id=";
	var r=Math.random()*1000;
    url=url+r;
	document.all("LoI_ValidateCodeImage").src=url;
	document.all("LoI_txtVC").value="";
    document.all("LoI_txtVC").focus();return false;
 }
window.attachEvent("onload", correctPNG);
