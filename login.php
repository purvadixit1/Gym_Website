<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "gym1";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("connection fail");
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$eadd = $_POST['eadd'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$r1 = $_POST['r1'];

$sql = "INSERT INTO `gym1` (`sr`, `fname`, `lname`, `eadd`, `pass`, `cpass`, `r1`) VALUES (NULL, '$fname', '$lname', '$eadd', '$pass', '$cpass', '$r1')";

if($conn->query($sql)==true)
{
    echo "Congratulations!! Successfully Registered";
}
else{
    echo "Error";
}
$conn->close();
?>