<?php
include 'db_connection.php';

// connection open from OpenCon() function
$conn = OpenCon();

echo "Connected Successfully";

// connection close from CloseCon() function
CloseCon($conn);

?>