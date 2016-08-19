<?php
require '../../includes/init.php';
if (!$session->is_logged_in()) {
    redirect_to("login.php");
}

$log_file = SITE_ROOT.DS.'log'.DS.'log.txt';

if(isset($_GET["clear"]) && $_GET["clear"] == "true"){
    file_put_contents($log_file,'');

    log_action("Clear", "Logfile cleared by user id : ".$session->user_id);

    redirect_to("logfile.php");
    ?><br /><?php
}

include_layout_template('admin_header.php');
?>

    <h1>Log file</h1>
    </br>
    <div>
        <a href="logfile.php?clear=true">Clear log file</a>
        <a href="logout.php">Logout</a></br>
        <?php
        if(file_exists($log_file) && is_readable($log_file) && $handle = fopen($log_file, 'r'))
        {
            echo "<ul class='log_list'>";
            while(!feof($handle)){
                $sadrzaj = fgets($handle);
                if(trim($sadrzaj) != ""){
                    echo "<li>".$sadrzaj."</li>";
                }
            }
            echo "</ul>";
        }


        ?>
        <br />
    </div>
<?php
include_layout_template('footer.php'); ?>