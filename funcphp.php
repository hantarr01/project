<?php 
$Email = "";
$Password = "";
if(isset($_POST['Email'])) $Email = $_POST['Email'];
if(isset($_POST['Password'])) $Password = $_POST['Password'];
echo $Email;
?>