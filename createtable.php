<?php
// sample URL http://<ip Address>/createtable.php?database=<database>&dbusername=<dbuser>&dbpassword=<dbpassword>&table=<table to create>

// Prepare variables for database connection, get them all from the URL

    $dbusername = $_GET['dbusername'];
    $dbpassword = $_GET['dbpassword'];
    $database = $_GET['database'];
    $table = $_GET['table'];
    $server = "localhost";  //just leave it as local host

    // Connect to your database
    $conn = new mysqli($server, $dbusername, $dbpassword, $database);

    // Prepare the SQL statement, you need to build the string so the variables expand.
    $sql = "CREATE TABLE ";
    $sql .= $table;
    $sql .= "(`Datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,`sensor` int(11) NOT NULL,`distance` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1";


    // Execute SQL statement

    if ($conn->query($sql) === TRUE) {
    echo "New table created successfully";
        } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
        }


    $conn->close();
?>
