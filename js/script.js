
$(document).ready(function() {

    $("#contactForm").submit(function() {
        $.ajax({
            type: "POST",
            url: "php/mail.php",
            data: $(this).serialize()
        }).done(function() {
            alert("Спасибо за сообщение!");
            $("#contactForm").trigger("reset");
        });
        return false;
    });

});