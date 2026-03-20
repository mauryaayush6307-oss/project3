<?php
include "db.php";

$sql = "SELECT * FROM register";
$q = mysqli_query($conn, $sql);


//$q=mysqli\_query($conn,$sql);

//$data=mysqli\_fetch\_array($q);



// echo $data\["name"];

// echo $data\["email"];

// echo $data\["password"];

// echo $data\["city"];


?>



<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>City</th>
    </tr>

<?php
while($data = mysqli_fetch_assoc($q)) {
    echo "<tr>";
    echo "<td>" . $data["name"] . "</td>";
    echo "<td>" . $data["email"] . "</td>";
    echo "<td>" . $data["password"] . "</td>";
    echo "<td>" . $data["city"] . "</td>";
    echo "</tr>";
    echo "<td><a href='delete.php?id=" . $data["id"] . "'>delete</a></td>";
}
?>

</table>

</body>
</html>