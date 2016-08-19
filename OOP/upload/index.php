<?php
//$_POST[];
//$_FILES[];
$message = "";
$upload_errors = array (
    UPLOAD_ERR_OK           => "Nema greške.",
    UPLOAD_ERR_INI_SIZE     => "Pokušavate da učitate preveliki fajl. Max 1MB.",
    UPLOAD_ERR_FORM_SIZE    => "Preveliki fajl.",
    UPLOAD_ERR_PARTIAL      => "Učitavanje iz delova.",
    UPLOAD_ERR_NO_FILE      => "Niste izabrali fajl",
    UPLOAD_ERR_NO_TMP_DIR   => "Nema privremenog foldera",
    UPLOAD_ERR_CANT_WRITE   => "Ne može da upiše na disk",
    UPLOAD_ERR_EXTENSION    => "Ne može da učita fajl sa izabranom ekstenzijom."
)
;

if(isset($_POST["submit"])) {
    $tmp_file = $_FILES["file_upload"]["tmp_name"];
    $file_name = basename($_FILES["file_upload"]["name"]);
    $upload_dir = "uploads";

    if(move_uploaded_file($tmp_file, $upload_dir."/".$file_name)) {
        $message = "Fajl je učitan";
    } else {
        $error = $_FILES["file_upload"]["error"];
        $message = $upload_errors[$error];
    }
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>File Upload</title>
</head>
<body>

<form action="index.php" enctype="multipart/form-data" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input type="file" name="file_upload">
    <input type="submit" name="submit" value="Upload">
</form>
<?php

    if(!empty($message)) {
        echo "<p>{$message}</p></br>";
    }

//    if(isset($_FILES["file_upload"])) {
//        $error = $_FILES["file_upload"]["error"];
//        echo $upload_errors[$error];
//    }
?>
</body>
</html>

