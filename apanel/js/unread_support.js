$(function () {
    "use strict";

    $('body').tooltip({
        selector: '[rel=tooltip]'
    });
    messagesRead()

    setInterval(function() {
        messagesRead()
    }, 5000);

    function messagesRead() {
        $.ajax({
            type: "GET",
            url: "/" + admin_url_panel + "/unread_support",
            success: function (response) {
                if (response) {
                    var msg = parseInt(response.messages);
                    if (msg > 0) {
                        $('#nav-support').addClass('nav-unread');
                    } else {
                        $('#nav-support').removeClass('nav-unread');
                    }
                }
            },
            error: function (err) {
                console.log(err)
            }
        });
    }
})