<?php
require '../../includes/init.php';
if(!$session->is_logged_in()){
    redirect_to("login.php");
}

include_layout_template('admin_header.php');
?>

    <a href="logfile.php">View log</a>
    <a href="photo_upload.php">Photo upload</a>
    <a href="photos.php">Photos</a>
    <a href="logout.php">Logout</a>
    <form>

    </form>
<?php
include_layout_template('footer.php'); ?>