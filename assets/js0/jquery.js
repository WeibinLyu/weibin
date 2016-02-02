$(function(){
    $('#loginform').submit(function(e){
        //return false;
    });

    $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});

$('#login-button').click(function(event){
    event.preventDefault();
    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
});
$(function(){
    //����������λ�ô��ھඥ��100��������ʱ����ת���ӳ��֣�������ʧ
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>100){
                $("#back-to-top").show(15);
            }
            else
            {
                $("#back-to-top").hide(15);
            }
        });
    });
});