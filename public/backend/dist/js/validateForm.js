$(document).ready(function(){
    $('.username').change(function(){
        var username = $(this).val();
        if(username == null || username == ''){
            $('.err_username').text('Username không được để trống!!');
        }else{
            $('.err_username').text('');
        }
    })

    $('.name').change(function(){
        var fullname = $(this).val();
        if(fullname == null || fullname == ''){
            $('.err_fullName').text('Full Name không được để trống!!');
        }else{
            $('.err_fullName').text('');
        }
    })

    $('.email').change(function(){
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var email = $(this).val();
        if(email == null || email == ''){
            $('.err_email').text('Email không được để trống!!');
        }else if(!re.test(email)){
            $('.err_email').text('Email không hợp lệ!!');
        }else{
            $('.err_email').text('');
        }        
    })

    $('.password').change(function(){
        var pass = $(this).val();
        if(pass == null || pass == ''){
            $('.err_pass').text('Password không được để trống!!');
        }else if(pass.length <= 5){
            $('.err_pass').text('Password phải lớn hơn 5 ký tự!!');
        }else{
            $('.err_pass').text('');
        }        
    })

    $('.conf').change(function(){
        var pass = $(this).val();
        if(pass == null || pass == ''){
            $('.err_conf').text('Confirm Password không được để trống!!');
        }else if(pass != $('#password').val()){
            $('.err_conf').text('Confirm Password không khớp!!');
        }else{
            $('.err_conf').text('');
        }        
    })
})