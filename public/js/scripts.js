$(document).ready(function(){
    $('.post-item').click(function(){
        id = $(this).attr('id');
        location.href = '/post/'+id;
    });
});