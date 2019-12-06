# MP Movie House

<div class="sidenav">
 
<a href='$link_address1'>Main Menu</a>

<a href='$link_address2'>Search for Movies</a>

<a href='$link_address3'>Add a Movie</a>

<a href='$link_address4'>Delete a Movie</a>

<a href='$link_address5'>Rate a Movie</a>

</div>


<h2>MP Movie House - Main Menu</h2>


<h3>Welcome to MP Movie House</h3>

<br/>Keep Inventory of all your movies with this simple application.

<br/>Just enter the Title, Release Years, Director, Actors, and Genre.

<br/>Search and Rate your movies too!

Enjoy!
<br/>

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

$movietitle = $releaseyear = $director = $actor = $genre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movietitle = test_input($_POST["movietitle"]);
    $releaseyear = test_input($_POST["releaseyear"]);
    $director = test_input($_POST["director"]);
    $actor = test_input($_POST["actor"]);
    $genre = test_input($_POST["genre"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="sidenav">
 
<a href='$link_address1'>Main Menu</a>

<a href='$link_address2'>Search for Movies</a>

<a href='$link_address3'>Add a Movie</a>

<a href='$link_address4'>Delete a Movie</a>

<a href='$link_address5'>Rate a Movie</a>

</div>

<h2>MP Movie House - Search</h2>

<h3>To search for movies in your inventory, Click the link below:</h3>

<form>
         <input type="button" onclick="window.location.href = 'https://github.com/JamesMcKinley-Portee/MP-Movie_House/search" value="Search for Movies"/>
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Movie Title <input type="text" name="movietitle">
  <br><br>
  Release Year <input type="text" name="releaseyear">
  <br><br>
  Director(s) <input type="text" name="director">
  <br><br>
  Actor(s) <input type="text" name="actor">
  <br><br>
  Genre <input type="text" name="genre">
  <br><br>
  <input type="submit" name="search" value="Search">  
  </form>
  
  <?php
echo "<h2>Search Results:</h2>";
echo $movietitle;
echo "<br>";
echo $releaseyear;
echo "<br>";
echo $director;
echo "<br>";
echo $actor;
echo "<br>";
echo $genre;
?>
  </body>
  </html>
