<?php
require '../../includes/init.php';

$session ->logout();

redirect_to("login.php");

?>