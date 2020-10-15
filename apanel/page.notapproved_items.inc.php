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

$support = new items($dbo);
$items = $support->itemsNotApproved();

echo json_encode(["items" => $items]);
exit;



