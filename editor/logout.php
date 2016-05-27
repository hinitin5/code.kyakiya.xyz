<?php
session_start();
include('../base_url.php');
session_unset();
session_destroy();

//echo "<script>alert('You have been successfully logged out!');</script>";
header('Refresh:0; url='.$base_url);

?>