$(function () {
    "use strict";

    $('body').tooltip({
        selector: '[rel=tooltip]'
    });
    messagesRead()
    itemsNotApproved()
    usersNotVerified()

    setInterval(function() {
        messagesRead()
        itemsNotApproved()
        usersNotVerified()
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
    function itemsNotApproved() {
        $.ajax({
            type: "GET",
            url: "/" + admin_url_panel + "/notapproved_items",
            success: function (response) {
                if (response) {
                    var msg = parseInt(response.items);
                    if (msg > 0) {
                        $('#nav-market').addClass('nav-unread');
                    } else {
                        $('#nav-market').removeClass('nav-unread');
                    }
                }
            },
            error: function (err) {
                console.log(err)
            }
        });
    }
    function usersNotVerified() {
        $.ajax({
            type: "GET",
            url: "/" + admin_url_panel + "/notverified_users",
            success: function (response) {
                if (response) {
                    var msg = parseInt(response.users);
                    if (msg > 0) {
                        $('#nav-users').addClass('nav-unread');
                    } else {
                        $('#nav-users').removeClass('nav-unread');
                    }
                }
            },
            error: function (err) {
                console.log(err)
            }
        });
    }
})