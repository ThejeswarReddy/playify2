<?php

$output = NULL;

if (isset($_POST['submit'])) {
  //connect to the database
  $mysqli = NEW MySQLi("localhost","root","root","playify");

  $search = $mysqli->real_escape_string($_POST['search']);

  $resultSet = $mysqli->query("SELECT * FROM music WHERE file LIKE '%$search%'");

  if ($resultSet->num_rows > 0) {
    while ($rows = $resultSet->fetch_assoc()) {

      $file = $rows['file'];
      $cover = $rows['cover'];
      $artist = $rows['artist'];
      $title = $rows['title'];

      $output .= "<li song=\"$file\" cover=\"$cover\" artist=\"$artist\">$title - $artist</li>" ;
    }
  }
  else{
    $output ="No results";
  }
}

?>
