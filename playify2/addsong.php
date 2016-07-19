<?php
require("config.php");

$file = $_POST['inputFileName'];

if(empty($_POST['inputFileName']))
{ die("Please enter a File Name."); }
if(empty($_POST['coverSubmit']))
{ die("Please enter a cover."); }
if(empty($_POST['artistSubmit']))
{ die("Please enter an artist Name."); }
if(empty($_POST['titleSubmit']))
{ die("Please enter a title for song"); }

// Add row to database
$query = "
    INSERT INTO music (
        file,
        cover,
        artist,
        title
    ) VALUES (
        :inputFileName,
        :coverSubmit,
        :artistSubmit,
        :titleSubmit
    )
";

$query_params = array(
    ':inputFileName' => $_POST['inputFileName'],
    ':coverSubmit' => $_POST['coverSubmit'],
    ':artistSubmit' => $_POST['artistSubmit'],
    ':titleSubmit' => $_POST['titleSubmit']
);
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }

header("Location: playify.php");



 ?>
