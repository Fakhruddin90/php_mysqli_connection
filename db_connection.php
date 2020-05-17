<!-- Connect to the server -->

<?php

// function for open connection to the server
function OpenCon()
 {
 $dbhost = "localhost"; // servername
 $dbuser = "root"; // database username
 $dbpass = ""; // database password
 $db = "practice"; // database name


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
 // function for close connection to the server
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>