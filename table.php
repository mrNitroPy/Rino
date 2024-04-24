<?php

include "config.php";

$db->create("users", [
    'id'=> ["INT", "NOT NULL", "AUTO_INCREMENT", "PRIMARY KEY"],
    'user_id'=> ["BIGINT", "NOT NULL"],
    'step'=> ["VARCHAR(300)", "DEFAULT NULL"],
    'wallet'=> ["VARCHAR(300)", "DEFAULT '0'"],
]);