<?php // header.php
session_start();
echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script>" .
	"<meta name='viewport' content='width=device-width, initial-scale=1'>" .
	"<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>" .
	"<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
include 'functions.php';

$userstr = ' (Guest)';

if (isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
	$loggedin = TRUE;
	$userstr = " ($user)";
}
else $loggedin = FALSE;

//echo "<title>$appname$userstr</title><link rel='stylesheet' href='style.css' type='text/css' />" .
echo "<title>$appname$userstr</title>" .
	"<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>" .
	"<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>" .
	"<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'> " .
	"</head><body><div class='container-fluid'><header><h1>$appname$userstr</h1></header>";
	//"</head><body><div class='appname container-fluid'>$appname$userstr</div>";

if ($loggedin)
{
	echo "<br ><div id='div_menu_loggedin class=''>" .
		"<li><a href='members.php?view=$user'>Home</a></li>" .
		"<li><a href='members.php'>Members</a></li>" .
		"<li><a href='friends.php'>Friends</a></li>" .
		"<li><a href='messages.php'>Messages</a></li>" .
		"<li><a href='profile.php'>Edit Profile</a></li>" .
		"<li><a href='logout.php'>Log out</a></li></ul><br />";
}
else
{
	echo ("<br /><ul class='menu'>" .
			"<li id=menu_home><a href='index.php'>Home</a></li>" .
			"<li><a href='signup.php'>Sign up</a></li>" .
			"<li><a href='login.php'>Log in</a></li>" .
			"<span class='info'>&#8658; You must be logged in to view this page.</span><br />");
}

?>

