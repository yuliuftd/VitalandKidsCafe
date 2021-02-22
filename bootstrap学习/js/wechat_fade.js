$(".text-light-wechat").hover(function () {
    $(".wechat").fadeIn(500);
    $(".code_wrap").css("z-index", 200);
}, function () {
    $(".wechat").fadeOut(0);
    $(".code_wrap").css("z-index", -50);
});
$(".wechat").hover(function () {
    $(this).fadeIn(0);
    $(".code_wrap").css("z-index", 200);
}, function () {
    $(this).fadeOut(500);
    $(".code_wrap").css("z-index", -50);
});