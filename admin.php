<?php
require_once 'dbcon.php';
if(!isset($_SESSION['email'])){
    header('location: login.php');
}

?>
<h2>Admin</h2>
<a href="logout.php">Logout</a>