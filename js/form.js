$(function() {
    $('#btn').on('click', function() {
    var email = $('input[name=user_mail]').val();
    var name = $('input[name=user_name]').val();
    var link = $('input[name=user_link]').val();
    var message = $('textarea[name=user_text]').val();
    
    var patternEmail = /(\S+)@([a-z0-9]+[.])(\S+)/;
    var patternUrl = /^(ftp|http|https):\/\/[^ "]+$/;
    var errorBox = [];
    if (email.search(patternEmail) !== 0) {
    $('input[name=user_mail]').css('border-color', '#d25460').focus(function(event) {
        $(this).css('border-color', '#000')
    });
        errorBox.push('Не верный email')
    }
    if ($.trim(link).length != "" && link.search(patternUrl) !== 0) {
    $('input[name=user_link]').css('border-color', '#d25460').focus(function(event) {
        $(this).css('border-color', '#000')
    });
        errorBox.push('Не верный email')
    }
    if ($.trim(name).length == "") {
    $('input[name=user_name]').css('border-color', '#d25460').focus(function(event) {
        $(this).css('border-color', '#000')
    });
        errorBox.push('Не заполнено имя')
    }
    if ($.trim(message).length == "") {
    $('textarea[name=user_text]').css('border-color', '#d25460').focus(function(event) {
        $(this).css('border-color', '#000')
    });
        errorBox.push('Не заполнено собщение')
    }
    if (!$.isEmptyObject(errorBox)) {
        $.each(errorBox, function(index, el) {})
    } else {
        sendAjaxForm('sendForm', 'ajax/send.php', name);
        return false; 
    }
   })     
});
 
function sendAjaxForm(idForm, url, name) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: $("#"+idForm).serialize(), 
        success: function(data) { 
            $('#sendForm').hide().closest('.form-wrapper').append('<p class="success">Спасибо за отзыв, '+name+'!</p>')
        }
  });
}


var formValidationEmpty = function(input) {
    if($.trim(input.val()).length == "") {
        input.addClass('no-valid');
    }
    else {
        input.removeClass('no-valid');
    }
};

var formValidationEmail = function(input) {
    if(input.val().search(patternEmail) != 0 && input.val() != "") {
        input.addClass('no-valid');
    }
    else {
        input.removeClass('no-valid');
    }
};