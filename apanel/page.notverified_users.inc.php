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

$support = new account($dbo);
$users = $support->usersNotVerified();

echo json_encode(["users" => $users]);
exit;



