$(function(){
    $('#loginform').submit(function(e){
        //return false;
    });

    $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});

$(function(){
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>150){
                $("#back-to-top").show(15);
            }
            else
            {
                $("#back-to-top").hide(15);
            }
        });
    });
});