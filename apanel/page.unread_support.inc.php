<?php

header("Content-type: application/json; charset=utf-8");

if (!defined("APP_SIGNATURE")) {

    header("Location: /");
    exit;
}

if (!admin::isSession()) {

    header("Location: /".APP_ADMIN_PANEL."/login");
    exit;
}

$support = new support($dbo);
$messages = $support->countMsgUnread();

echo json_encode(["messages" => $messages]);
exit;



