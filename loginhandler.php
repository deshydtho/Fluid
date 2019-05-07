<?php
include 'conn.php';
$user=$_POST['user'];
echo "Your username was $user<br>";
$pass=$_POST['pass'];
echo "Your password was $pass<br>";

$sql="select userid, password, firstname, lastname from user where userid='$user' and password='$pass';";
$result = $con->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    $fluiduser=$row['userid'];
    $fluiduserpass=$row['password'];
}
if(isset($fluiduser)){
    echo "<br>Correct";
}
else{
    echo "Incorrect";
}


?>