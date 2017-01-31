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