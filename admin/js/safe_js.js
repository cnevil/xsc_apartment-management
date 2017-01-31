function auto(){
        var middle_left = document.getElementById("middle_left");
        var middle_right = document.getElementById("middle_right");
        var main_content = document.getElementById("main_content");
        if(middle_left.offsetHeight < main_content.offsetHeight){
                middle_left.style.height = main_content.offsetHeight  + "px";
                middle_right.style.height = main_content.offsetHeight  + "px";
        }else{
                text.style.height = middle_left.offsetHeight  + "px";
        }
}
window.onload = function(){
        auto();
}
function checkserch(){
if(document.serch_form.sel.value=="ip")
{
	if(document.serch_form.inp.value=="")
	{
		alert("搜索ip不能为空");
     	document.serch_form.inp.focus();
	 	return false;
	}
	else
	{	str_ip=document.serch_form.inp.value;
		var re =  /^((1?\d?\d|(2([0-4]\d|5[0-5])))\.){3}(1?\d?\d|(2([0-4]\d|5[0-5])))$/ ;
		if (re.test(str_ip)) {
			return ture;
		}
		else
		{
			alert("错误 正确格式：218.61.251.94");
			document.serch_form.inp.focus();
			return false;
		}

	}
}
else if(document.serch_form.sel.value=="time")
{
	if(document.serch_form.inp.value=="")
	{
		alert("搜索时间不能为空");
     	document.serch_form.inp.focus();
	 	return false;
	}
	else
	{
	var strs=document.serch_form.inp.value;
	var z=/\d{4}[-](\d{2})[-]\d{2}/;
    	if (z.test(strs)) {
			return ture;
		}
		else
		{
			alert("错误 正确格式：YYYY-MM-DD");
			return false;
		}
	}
}
}
function chackinfo() {

   if(confirm("确定要删除吗？一旦删除将不能恢复！"))

      return true;

     else
       return false;

}