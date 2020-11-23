<?php
$servername = "Proj-mysql.uopnet.plymouth.ac.uk";
$username = "COMP3000_MHolt";
$password = "ZkgE261+";
$dbname = "COMP3000_MHolt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Test user uname-pass.
if (!isset($_POST['username'],$_POST['password'])){
    exit('dumbo, go back do it right');
}
$result = $conn->query("SELECT Users FROM users WHERE Pass = 'c7'");
if($result->num_rows == 0) {
    echo "No user exists.";
} else {
    echo "found";
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = "id";
    $_SESSION["username"] = "name";
}
$conn->close();
?>
