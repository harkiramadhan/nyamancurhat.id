$(document).ready(function(){
    var userid = $('#userid').val()

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