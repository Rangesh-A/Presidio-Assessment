<?php
session_start();
if(!$_SESSION['vaccination_registration'])
{
    header('location:Login.php');
}
?>

