$(".sidebar").click(function () {
    $(".sidebar-show").css("left", "0px");
});
$("#sidebar-close-btn").click(function () {
    $(".sidebar-show").css("left", "-100%");
});
$(".sbac").click(function () {
    $(".sidebar-show").css("left", "-100%");
});

$(".sidebar").click(function () {
    $(".sbac").addClass("sidebarclassadd");
});
$(".sbac").click(function () {
    $(".sbac").removeClass("sidebarclassadd");
});
$("#sidebar-close-btn").click(function () {
    $(".sbac").removeClass("sidebarclassadd");
});
$("#sidebar-close-btn").click(function () {
    $(".sbac").removeClass("sidebarclassadd");
});

$(".viewbenefits").click(function () {
    $(".viewbenefitsshow").css("right", "0px");
});



// Modal Click Event
$("#register-btn").click(function () {
    $(".login-content").hide();
    $(".signup-content").show();
    $(".forgot-content").hide();
});

$("#forgot-btn").click(function () {
    $(".forgot-content").show();
    $(".login-content").hide();
    $(".signup-content").hide();
});

$("#login-btn").click(function () {
    $(".login-content").show();
    $(".signup-content").hide();
    $(".forgot-content").hide();
});