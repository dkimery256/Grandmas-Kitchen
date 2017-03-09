<?php
//Get files in upload folder.
$file = 'uploads/' . $_POST['delete_value'];
unlink($file);
header("Location: gk_delete_menu.php");
?>