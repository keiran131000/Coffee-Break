<meta http-equiv="refresh" content="1">




<?php
$servername = "sundog.no-ip.org";
$username = "hackathon";
$password = "hackathon2017";
$dbname = "texecom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT time, ExpanderId,  DeviceData0, DevNo FROM ricochet ORDER BY time DESC limit 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0 ) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Time " . $row["time"] . " Expander ID " . $row["ExpanderId"]. " Data " . $row["DeviceData0"]. " Dev No" . $row["DevNo"]. "<br>";
        $id=$row['DevNo'];
    }
} else {
    echo "0 results";
}
$conn->close();


?>