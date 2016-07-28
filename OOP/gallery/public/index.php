<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 27.7.2016
 * Time: 10:48
 */
require '../includes/init.php';
//if(!$session->is_logged_in()){
//    redirect_to("admin/login.php");
//}
//$user = new UserSQL;
//$user -> insert_user("proske","petar","Petar","Prodanović");
//echo "<br />";
//echo "Radi li ovo";
include_layout_template('header.php');
//include SITE_ROOT.DS.'public'.DS.'layouts'.DS.'footer.php'


?>



Tu ide neki tekst;

<?php

include_layout_template('footer.php');

?>