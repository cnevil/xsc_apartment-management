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
function checkshsj() {
	if(document.add_shsj.ldjh_title.value==""){
     alert("题目不能为空");
     document.add_shsj.ldjh_title.focus();
	 return false;
	}
else if(document.add_shsj.ldjh_time.value==""){
     alert("时间不能为空");
     document.add_shsj.ldjh_time.focus();
	 return false;
	}
else{
	 return true;
	}
}
/********************典型推广****************/
function checkdxtg() {
	if(document.add_shsj.ldjh_title.value==""){
     alert("题目不能为空");
     document.add_shsj.ldjh_title.focus();
	 return false;
	}

	else if(document.add_shsj.ldjh_img.value==""){
     alert("图片地址不能为空");
     document.add_shsj.ldjh_img.focus();
	 return false;
	}
	else{
	 return true;
	}
}