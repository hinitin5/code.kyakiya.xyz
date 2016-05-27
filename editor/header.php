<?php

if(!isset($_SESSION['status'])) {

	echo '<a href="'.$base_url.'">Login</a>';

} else {

	if($_SESSION['status']==='active') {
    echo '<a href="'.$base_url.'logout.php">Logout</a>';
    } else {
    	echo '<a href="'.$base_url.'">Login</a>';    
    }
	
}

?>