<?php
require '../../includes/init.php';
if (!$session->is_logged_in()) {
    redirect_to("login.php");
}
$max_file_size = 2000000;

if(isset($_POST["submit"])) {
    $fotografija = new photograph();
    $fotografija->attach_file($_FILES["file_upload"]);
    $fotografija->caption = $_POST["caption"];
    if($fotografija->save()){
//        uspesno
        $session->message("Photography uploaded.");
        unset($_FILES["file_upload"]);
        redirect_to("photos.php");
    } else {
//        neuspesno
        $message = join("</br>", $fotografija->photo_errors);
    }
}



include_layout_template('admin_header.php');
?>

    <h1>Photo Upload</h1>
</br>
<?php echo output_message($message); ?>
    <form action="photo_upload.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>">
        <input type="file" name="file_upload" />
        <input type="text" name="caption" />
        <input type="submit" name="submit" value="Upload">
    </form>
<?php
include_layout_template('footer.php'); ?>