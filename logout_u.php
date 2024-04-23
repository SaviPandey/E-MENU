<?php
session_start();
require 'connection.php';
$conn = Connect();
if(session_destroy()) // Destroying All Sessions
{
    $query = "DELETE FROM CURRENT_ORDER WHERE username = '$_SESSION[login_user2]';";
    $conn -> query($query);
    header("Location: customerlogin.php"); // Redirecting To Home Page
}
?>