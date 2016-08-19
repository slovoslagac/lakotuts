<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 16.8.2016
 * Time: 13:45
 */
require_once('../../includes/init.php');
if (!$session->is_logged_in()) {
    redirect_to("login.php");
}

$fotke = PhotographSQL::all();

include_layout_template('admin_header.php');


?>

<h2>Photo list</h2></br>
<h4>Current user : <?php echo $session->get_firstname();?></h4>
<a href="logfile.php">View log</a>
<a href="photo_upload.php">Photo upload</a>
<a href="logout.php">Logout</a>
</br>
</br>
<?php echo output_message($message)?>
<table border="1">
    <tr><strong>
        <td>Image</td>
        <td>Filename</td>
        <td>Caption</td>
        <td>Size</td>
        </strong>
    </tr>
    <?php foreach ($fotke as $fotka) {
        $photo = new photograph();
        $photo->filename = $fotka->filename;
        $photo->size = $fotka->size;
        $photo->caption = $fotka->caption; ?>
        <tr>
            <td>
                <img src="<?php echo '../'.$photo->image_path('/');?>" width="100">
            </td>
            <td>
                <?php echo $fotka->filename;?>
            </td>
            <td>
                <?php echo $fotka->caption;?>
            </td>
            <td>
                <?php echo $photo->size_as_text(); ?>
            </td>
        </tr>


        <?php
    }

    ?>
</table>

<?php
include_layout_template('footer.php'); ?>
