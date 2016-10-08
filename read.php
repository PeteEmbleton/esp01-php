<?php
// sample url http://<ip address>/read.php?database=<db name>&dbusername=<db username>&dbpassword=<dbpassword>&table=<table to read>

    // Prepare variables for database connection, get them all from the URL

    $dbusername = $_GET['dbusername'];
    $dbpassword = $_GET['dbpassword'];
    $database = $_GET['database'];
    $table = $_GET['table'];
    $server = "localhost";  //just leave it as local host

    // Connect to your database
    $conn = new mysqli($server, $dbusername, $dbpassword, $database);

    // Prepare the SQL statement, you need to build the string so the variables expand.
    $sql = "SELECT * FROM ";
    $sql .= $table;


    // Execute SQL statement

$result = $conn->query($sql);

if ($result->num_rows > 0) {
        echo "Datetime,sensor,distance";
        echo "<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Datetime"]. "," . $row["sensor"]. "," . $row["distance"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
