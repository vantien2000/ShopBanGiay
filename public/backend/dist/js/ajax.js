$(document).ready(function(){
    $('.create-user').click(function(e){
        e.preventDefault();
        var formData = $('#frm-create').serialize();
        $('.form-control').val('');
        $.ajax({
            type: 'POST',
            url: '/admin/add-user',
            data: formData,
            dataType: 'json',
            success: function(data){
                if(data.err_username !== undefined){
                    $('.err_username').text(data.err_username);
                }else if(data.err_email !== undefined){
                    $('.err_email').text(data.err_email);
                }else{
                    alert(data.message);
                }
            },
            error: function(data){
                console.log(data);
                location.reload();
            }
        })
    });

    $('.btn-update').click(function(){
        $.ajax({
            type: 'GET',
            url: '/admin/users/'+$(this).data('id'),
            dataType: 'json',
            success: function(data){
                console.log(data.Email);
                $('.username').val(data.Username);
                $('.email').val(data.Email);
                $('.name').val(data.Name);
            }
        });
    });
})