<?php
/**
 * Created by PhpStorm.
 * User: Charles
 * Date: 3/30/16
 * Time: 2:21 PM
 */
//$servername = "cis.gvsu.edu";
//$username = "daenzer";
//$password = "daenzer2987";
//$dbname = "daenzer";
$loggedIn = false;
// Create connection
//$conn = mysql_connect($servername, $username, $password);
//mysql_select_db($dbname);
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error . ": login unsuccessful");
//}
//else{
//    $sql = "SELECT * FROM user WHERE cookie = '".$_COOKIE['cookie']."';";
//    $data = mysql_query($sql);
//    if ($data != null){
//        $loggedIn = true;
//    }
//}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<head>
    <meta charset="UTF-8">
    <title>Legends de League</title>
</head>
<body>
<div class="shell">
    <div class="header">
	<img src="images/LOL_logo.png" />
    </div>
    <div id="nav">
        <div class="full-width">
            <div class="nav-inner">
                <ul class="dropdown">
                    <li>
                        <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Menu</a>
                        <ul class="dropdown-content" id="myDropdown">
                            <a href="index.php">Home</a>
                            <a href="games.php">Recent Games</a>
                            <a href="champions.php">Champions</a>
                            <?php if(!$loggedIn) { ?>
                                <a href="login.php">Login/Sign Up</a>
                            <?php } else { ?>
                                <a href='#'>My Info</a>
                                <a href='#'>Log Out</a>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
                <ul class="full-nav left">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="games.php">Recent Games</a></li>
                    <li><a href="champions.php">Champions</a></li>
                </ul>
                <ul class="full-nav right">
                    <?php if(!$loggedIn) { ?>
                    <li><a href="login.php">Login/Sign Up</a></li>
                    <?php } else { ?>
                    <li><a href="login.php">Account</a>
                        <ul>
                            <li><a href='#'>My Info</a></li>
                            <li><a href='#'>Log Out</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div id="navalias"></div>
