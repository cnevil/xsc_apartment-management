/****************用户表验证**************/
function check() {
	if(document.psset.username.value==""){
    	 alert("用户名不能为空");
    	 document.psset.username.focus();
	 	return false;
		}
	else if(document.psset.passwd.value==""){
		alert("密码不能为空");
    	document.psset.passwd.focus();
		return false;
		}
	else{
		return true;
		}
}
/****************文件上传验证**************/
function checkfile() {
	if(document.fileset.filename.value=="")
		{
     		alert("文件地址不能为空");
     		document.fileset.filename.focus();
	 		return false;
		}
	else{
		return true;
		}
}
/****************新闻图片上传验证**************/
function checkxw() {
	if(document.psset.xw_name.value=="")
	{
     	alert("新闻名称不能为空");
    	 document.psset.xw_name.focus();
		 return false;
	}
	else if(document.psset.xw_url.value=="")
	{
    	 alert("新闻地址不能为空");
    	 document.psset.xw_url.focus();
	 	return false;
	}
	else if(document.psset.xw_img.value=="")
	{
     	alert("新闻图片地址不能为空");
     	document.psset.xw_img.focus();
	 	return false;
	}
	else{
		return true;
	}
}
/****************新闻图片上传验证**************/
function checklj() {
	if(document.psset.lj_name.value=="")
	{
     	alert("链接名称不能为空");
    	 document.psset.lj_name.focus();
		 return false;
	}
	else if(document.psset.lj_url.value=="")
	{
    	 alert("链接地址不能为空");
    	 document.psset.lj_url.focus();
	 	return false;
	}
	else if(document.psset.lj_img.value=="")
	{
     	alert("链接图片地址不能为空");
     	document.psset.lj_img.focus();
	 	return false;
	}
	else{
		return true;
	}
}