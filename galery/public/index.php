<?php

require_once "../includes/db.php";

$user = New Usersql;
$user->insert_user("proske2", "xxx", "Petar", "Prodanovic");

echo "Radi li ovo";

?>