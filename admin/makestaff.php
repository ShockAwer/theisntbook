<?php

include("../includes/config.inc.php");

$id = $_GET['id']; // get id through query string

$del = $conn->prepare("UPDATE fuckbook_users SET status = 7 WHERE id = ?"); // delete query
$del->bind_param("i",$id);
$del->execute();

if($del)
{
    //mysqli_close($db); // Close connection
    // we only need to use conn to close -ian
    $conn->close();
    header("location:users.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error promoting user"; // display error message if not delete
}
?>