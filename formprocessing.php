<?php
//echo "<pre>";
//print_r($_REQUEST);print_r($_FILES);
//exit;
move_uploaded_file($_FILES['profileImg']['tmp_name'][0],"upload/".$_FILES['profileImg']['name'][0]);
move_uploaded_file($_FILES['displayImg']['tmp_name'][0],"upload/".$_FILES['displayImg']['name'][0]);
exit;
$id = $_POST['id'];
$username = $_POST['username'];
$profileImg = $_FILES['profileImg'];
$displayImg = $_FILES['displayImg'];
?>