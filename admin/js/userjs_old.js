function check() {
if(document.psset.username.value=="")
{
     alert("用户名不能为空");
     document.psset.username.focus();
	 return false;
}
else if(document.psset.passwd.value=="")
{
	 alert("密码不能为空");
     document.psset.passwd.focus();
	 return false;

}

else
{
	 return true;
}
}
function checkfile() {
if(document.fileset.filename.value=="")
{
     alert("文件地址不能为空");
     document.fileset.filename.focus();
	 return false;
}

else
{
	 return true;
}
}
function checklj() {
if(document.add_lj.ljname.value=="")
{
     alert("链接名称不能为空");
     document.add_lj.ljname.focus();
	 return false;
}
else if(document.add_lj.ljaddress.value=="")
{
     alert("链接地址不能为空");
     document.add_lj.ljaddress.focus();
	 return false;
}
else if(document.add_lj.ljsx.value=="")
{
     alert("链接顺序不能为空");
     document.add_lj.ljsx.focus();
	 return false;
}
else
{
	 return true;
}
}
function chackinfo() {

   if(confirm("确定要删除吗？一旦删除将不能恢复！"))

      return true;

     else
       return false;

}
function checkshsj() {
if(document.add_shsj.sjtitle.value=="")
{
     alert("实践题目不能为空");
     document.add_shsj.sjtitle.focus();
	 return false;
}

else if(document.add_shsj.sjtime.value=="")
{
     alert("实践时间不能为空");
     document.add_shsj.sjtime.focus();
	 return false;
}
else
{
	 return true;
}
}
function checkindex(){
if(document.upload_index_images.upload_index_images_name.value=="")
{
     alert("图片不能为空");
     document.upload_index_images.upload_index_images_name.focus();
	 return false;
}
else if(document.upload_index_images.upload_index_images_url.value=="")
{
     alert("链接地址不能为空");
     document.upload_index_images.upload_index_images_url.focus();
	 return false;
}

else
{
	 return true;
}
}
function checkzxdt() {
if(document.add_zxdt.dttitle.value=="")
{
     alert("动态题目不能为空");
     document.add_zxdt.dttitle.focus();
	 return false;
}

else if(document.add_zxdt.dttime.value=="")
{
     alert("动态时间不能为空");
     document.add_zxdt.dttime.focus();
	 return false;
}
else
{
	 return true;
}
}
function checkjycy() {
if(document.add_jycy.jytitle.value=="")
{
     alert("就业题目不能为空");
     document.add_jycy.jytitle.focus();
	 return false;
}

else if(document.add_jycy.jytime.value=="")
{
     alert("就业时间不能为空");
     document.add_jycy.jytime.focus();
	 return false;
}
else
{
	 return true;
}
}
function checkldjh() {
if(document.add_ldjh.jhtitle.value=="")
{
     alert("讲话题目不能为空");
     document.add_ldjh.jhtitle.focus();
	 return false;
}

else if(document.add_ldjh.jhtime.value=="")
{
     alert("讲话时间不能为空");
     document.add_ldjh.jhtime.focus();
	 return false;
}
else
{
	 return true;
}
}
function checkwjzl() {
if(document.add_wjzl.wjtitle.value=="")
{
     alert("文件题目不能为空");
     document.add_wjzl.wjtitle.focus();
	 return false;
}

else if(document.add_wjzl.wjtime.value=="")
{
     alert("文件时间不能为空");
     document.add_ldjh.jhtime.focus();
	 return false;
}

else
{
	 return true;
}
}
function checkfile(){/*可删*/
if(document.add_file.add_file_name.value=="")
{
     alert("文件地址不能为空");
     document.add_file.add_file_name.focus();
	 return false;
}
else if(document.add_file.add_file_title.value=="")
{
     alert("文件名称不能为空");
     document.add_file.add_file_title.focus();
	 return false;
}

else
{
	 return true;
}
}