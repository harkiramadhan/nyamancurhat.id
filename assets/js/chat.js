$('.btn-chat-users').click(function(){
    var userid = $(this).attr('data-userid')
    
    $.ajax({
        url: baseUrl + 'chat/getChat',
        type: 'get',
        data: {userid : userid},
        success: function(res){
            $('#spinner-card-message').addClass('d-none')
            $('.card-message').html(res)
        }
    })
})