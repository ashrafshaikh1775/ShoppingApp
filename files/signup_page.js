$(document).ready(() => {
    $('#btnsub').on('click', (e) => {
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var address = $('#address').val();
        var gender = $('input:radio[name=gender]').is(':checked');
        if (username != '' && password != '' && email != '' && number != '' && address && gender) {
            var serialize = $('form').serializeArray();
            serialize.push({ name: "exe_file", value: 'signup_file' });
            $.ajax({
                url: '../connection/connection',
                type: 'POST',
                data: serialize,
                success: function (data) {
                    error_massage(data, 3000);
                    if (data == 'Registered') {
                        setTimeout(() => {
                            location.href = 'login_page';
                        }, 1000);
                    }
                }
            });
        }
        else {
            error_massage('All Fields are mandatory', 3000);
        }
    });
    function error_massage(error, time) {
        document.querySelector('.error_message_div').innerText = error;
        document.querySelector('.error_message_div').style.display = 'block';
        document.querySelector('.error_message_div').style.animation = 'fadeInAnimation 1s 1 ease alternate';

        var clr = setTimeout(() => {
            document.querySelector('.error_message_div').style.display = 'none';
        }, time);
    }
});