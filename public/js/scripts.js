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
});