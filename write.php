<?php

    // Prepare variables for database connection, get them all from the URL

    $dbusername = $_GET['dbusername'];
    $dbpassword = $_GET['dbpassword'];
    $database = $_GET['database'];
    $table = $_GET['table'];
    $server = "localhost";  //just leave it as local host

    // Connect to your database

    $dbconnect = mysql_pconnect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db($table,$dbconnect);
    $dbinsert = ($database.$table);
    // Prepare the SQL statement, you need to build the string so the variables expand.
    $sql = "INSERT INTO ";
    $sql .= $database;
    $sql .= ".";
    $sql .= $table;
    $sql .= " (sensor, distance) VALUES ('".mysql_real_escape_string($_GET['sensor'])."','".mysql_real_escape_string($_GET['distance'])."')";

    // Execute SQL statement

    mysql_query($sql);

?>

