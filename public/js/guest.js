$(document).ready({});
validateEmail = email => {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};
$('#sendmsg').on('click', () => sendMessage());

sendMessage = () => {
    let name = $('#formname').val();
    let email = $('#formemail').val();
    let subject = $('#formSubject').val();
    let body = $('#formtext').val();
    if (name.length < 3) {
        $('#errorname').html('Error, invalid name .');
    } else if (!validateEmail(email)) {
        $('#erroremail').html('Error, Invalid email.');
    } else if (subject.length < 3) {
        $('#errorsubject').html('Error,invalid subject.');
    } else if (body.length < 3) {
        $('#errorbody').html('Error,invalid body.');
    } else {
        $.ajax({
            type: 'Post',
            url: '/contact',
            data: {
                _token: CSRF_TOKEN,
                name: name,
                email: email,
                subject: subject,
                body: body
            },
            dataType: 'text',
            success: function(response) {
                $('#formname').val('');
                $('#formemail').val('');
                $('#formSubject').val('');
                $('#formtext').val('');
                $('#errorname').html('');
                $('#erroremail').html('');
                $('#errorsubject').html('');
                $('#errorbody').html('');
                iziToast.success({
                    position: 'topCenter',
                    message: 'Message sent.'
                });
            }
        });
    }
};
