<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="dog";
$connection=new mysqli ($dbhost,$dbuser,$dbpass,$db) or die ("connection failed");

$sqlquery = "SELECT * FROM 'dog.dog'";
$con -> query($sqlquery);

// $connection->close();

// ........got results from the table

// class dog{
//     var$dogName;
//     var$pawType;
//     var$humanName;
// }

while ($result->num_rows>0){
     //output data of each row
     while($row=$result->fetch_assoc()){
        echo "dogname:" . $row[dogname]. "-".$row["pawtype"]."".$row["humanName"]."<br>";
     }
} else {
    echo "0 results";
}

?>