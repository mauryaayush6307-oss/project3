<?php
$email=$_POST["userid"];
$password=$_POST["password"];
include "db.php";
$sql="SELECT * FROM admin WHERE email='$email' AND password='$password'";
$q=mysqli_query($conn,$sql);

echo $x=mysqli_num_rows($q);
//exit();
if($x==1){
    $_SESSION['register']=$register;
    header("location:dashboard.php");
}
else
    { ?>
    <script>
        alert("Invalid Email or Password");
        window.location.href = "login.php";
    </script>
    <?php
    }




?>