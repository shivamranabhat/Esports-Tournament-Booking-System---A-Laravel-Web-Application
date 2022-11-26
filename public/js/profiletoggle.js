$(document).ready(function () {
    var container = $(".profile-side-menu");
    container.hide();
    $("#profile").click(function (){
        container.show();
        container.addClass("side-bar-animation");
    });
    $(".cancel-button").click(function (){
        container.hide();
    });


});
