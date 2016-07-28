<?php
require '../../includes/init.php';
$message = "";
if($session->is_logged_in()){
    redirect_to("index.php");
}

if(isset($_POST["submit"])){
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    if($user = UserSQL::find_by_username_and_password($username,$password)) {
        $session -> login($user);
        log_action("Login", $user->username." logged in.");
        redirect_to("index.php");
    } else {
        $message = "Username or password is incorect";
    }
}

include_layout_template('admin_header.php');
?>

    <h2>Login forma</h2>
    <?php echo output_message($message);?>
    <form action="login.php" method="post">
        <label for="username">Username : </label>
        <input id="username" name="username" type="text" class="input" />
        <br />
        <label for="password">Password : </label>
        <input id="password" name="password" type="password" class="input" />
        <br />
        <input id="button" name="submit" type="submit" class="input" value="login">
    </form>
<?php
include_layout_template('footer.php'); ?>