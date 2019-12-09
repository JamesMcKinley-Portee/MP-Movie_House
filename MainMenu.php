<?php

/**
 * ***************************************************************************
 * Title: James McKinley-Portee
 * Use: ISAT 405-940
 * Author: James McKinley-Portee
 * School: Southern Illinois University Carbondale
 * Term: Fall 2019
 * Developed: Fall 2019
 * Tested: Fall 2019
 * ****************************************************************************
 */
?> 
<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="utf-8">
<title>Search</title>
<link rel="stylesheet" href="main.css">
</head>

<body> // Page Content

<?php
$link_address1 = 'MainMenu.php';
echo "<a href='$link_address1'>Main Menu</a>";

$link_address2 = 'Search.php';
echo "<a href='$link_address2'>Search for Movies</a>";

$link_address3 = 'Add.php';
echo "<a href='$link_address3'>Add a Movie</a>";

$link_address4 = 'Delete.php';
echo "<a href='$link_address4'>Delete a Movie</</a>";

$link_address5 = 'Rate.php';
echo "<a href='$link_address5'>Rate a Movie</a>";

?>

<div class="sidenav">
 
<a href='$link_address1'>Main Menu</a>

<a href='$link_address2'>Search for Movies</a>

<a href='$link_address3'>Add a Movie</a>

<a href='$link_address4'>Delete a Movie</a>

<a href='$link_address5'>Rate a Movie</a>

</div>

<h2>MP Movie House - Main Menu</h2>

<div class="wrapper">
<h3>Welcome to MP Movie House</h3>

<br/>Keep Inventory of all your movies with this simple application.

<br/>Just enter the Title, Release Years, Director, Actors, and Genre.

<br/>Search and Rate your movies too!

Enjoy!
<br/>
</div>
</body>
  </html>
