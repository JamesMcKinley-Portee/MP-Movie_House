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

<h2>MP Movie House - Delete</h2>

<h3>To delete movies from your inventory, Click the link below:</h3>

<form>
         <input type="button" onclick="window.location.href = 'https://github.com/JamesMcKinley-Portee/MP-Movie_House/Delete" value="Delete a Movie"/>
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
  <input type="submit" name="search" value="Submit">  
  <button type="reset" value="Reset">Cancel</button>
  </form>
  
  <?php
  
  $dbServername = "https://livesql.oracle.com/apex/livesql/s/jcvtuxxeltneo2yd2v7e1lgel";
  $dbUsername = "jimmyz_77@yahoo.com";
  $dbPassword = "OraclesBears19";
  $dbname = "movies";
  
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);
  
  if(!$conn) {
      echo "Connection failure:";
  }
  
  echo "Connection Successful";
  
  if (mysqli_select_db($conn, 'movies'))
  {
      echo "Database is not selected";
  }
  
  $movietitle = $_POST["movietitle"];
  $releaseyear = $_POST["releaseyear"];
  $director = $_POST["director"];
  $actor = $_POST["actor"];
  $genre = $_POST["genre"];
  
  
  $sql = "DELETE FROM movies WHERE $movietitle, $releaseyear, $director, $actor, $genre";
  
  if(!mysqli_query($conn, $sql))
  {
      echo "Values not deleted from inventory";
  }
  else
  {
      echo "Values deleted from inventory";
  }
  
  header("refresh: 2; url=Delete.php ");
  
  
echo "<h2>Delete a Movie Confirmation:</h2>";
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
