var inputPwd = $('#input-pwd');
    $('#conf-pwd').on('input', function(){
    $(this).removeClass('form-control-solid')
    if(inputPwd.length > 0){
        if(inputPwd.val() === $(this).val()){
            $(this).addClass('is-valid')
            $(this).removeClass('is-invalid')
            $('#text-conf-pwd').text('Password is match')
            $('#kt_sign_in_submit').attr('disabled', false)
        }else{
            $(this).addClass('is-invalid')
            $(this).removeClass('is-valid')
            $('#text-conf-pwd').text('Password not match')
            $('#kt_sign_in_submit').attr('disabled', true)
        }
    }
})