<?php
echo '<!DOCTYPE html>';
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

echo '<html lang="en-US">';

echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Main Menu/title>';
echo '<link rel="stylesheet" href="main.css">';
echo '</head>';

echo '<body>'; // Page Content


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



echo '</html>';

?>
<h2>Welcome to MP Movie House</h2>

<div class="sidenav">;
<a href='$link_address1'>Main Menu</a>;

<a href='$link_address2'>Search for Movies</a>;

<a href='$link_address3'>Add a Movie</a>;

<a href='$link_address4'>Delete a Movie</a>;

<a href='$link_address5'>Rate a Movie</a>;

</div>;


<br \>
<textarea name="Menu Welcome" rows=10 cols=80><h3>Welcome to MP Movie House</h3>
<br/>Keep Inventory of all your movies with this simple application.
<br/>Just enter the Title, Release Years, Director, Actors, and Genre.
<br/>Search and Rate your movies too!
Enjoy!
<br/>
</textarea>
<br/>
