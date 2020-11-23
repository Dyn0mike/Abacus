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
echo "Connected successfully";
$conn->close();
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Abacus</title>

    <link rel="stylesheet" href="css/bootstrap.css?v=1.0">

</head>

<body>
<b>Welcome</b>
<form action="Login/login.php" method="post">
    <label for="username">

    </label>
    <input type="text" name="username" placeholder="Username" id="username" required>
    <label for="password">
    </label>
    <input type="password" name="password" placeholder="Password" id="password" required>
    <input type="submit" value="Login">
</form>


</body>
</html>

