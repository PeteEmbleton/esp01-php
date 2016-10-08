<?php
//sample url http://<ip address>/tableclear.php?database=<database>&dbusername=<dbuser>&dbpassword=<dbpassword>&table=<table to clear>
// Prepare variables for database connection, get them all from the URL

    $dbusername = $_GET['dbusername'];
    $dbpassword = $_GET['dbpassword'];
    $database = $_GET['database'];
    $table = $_GET['table'];
    $server = "localhost";  //just leave it as local host

    // Connect to your database
    $conn = new mysqli($server, $dbusername, $dbpassword, $database);

    // Prepare the SQL statement, you need to build the string so the variables expand.
    $sql = "TRUNCATE TABLE ";
    $sql .= $table;


    // Execute SQL statement

$result = $conn->query($sql);

echo $result;

$conn->close();

?>
