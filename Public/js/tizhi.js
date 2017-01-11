/**
 * Created by dark on 2017/1/10.
 */
//测试结果记录弹出
$(".tztitle").click(function(){
    if($(".tzstyle").css('left')<'0px'){
        $(".tzstyle").animate({left:'1px',opacity:'1'},1000);
    }else{
        $(".tzstyle").animate({left:'-400px',opacity:'0'},1000);
    }
})
//外部点击关闭
//$(".report").click(function(){
//    $(".tzstyle").animate({left:'-400px',opacity:'0'},1000);
//})