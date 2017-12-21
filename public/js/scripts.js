$(document).ready(function(){
    $('.post-item').click(function(){
        id = $(this).attr('id');
        location.href = '/post/'+id;
    });
    $('.bt-new-text').click(function(){
        id = $(this).attr('id');
        if(id == 'post'){
            $('#title').focus();
        }else if(id == 'comm'){
            $('#comment').focus();
        }
    });
    $('#message').focus(function(){
        $(this).css({
            'height': '90px'
        });
    });
    $('#message').blur(function(){
        if($(this).val() == '') {
            $(this).css({
                'height': '37px'
            });
        }
    });
});