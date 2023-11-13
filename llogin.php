<?php
include("connect.php");

$Username = mysqli_real_escape_string ($conn, $_POST["username"]);
$Password = mysqli_real_escape_string ($conn, $_POST["password"]);

$sql1= "select * from login where username = '$Username' and password='$Password'";

$result=mysqli_query($conn, $sql1);
$r=mysqli_fetch_array($result, MYSQLI_ASSOC);
$c=mysqli_num_rows($result);


if($c==1)
{
header("Location: tenantpay.html");
}
else
{
echo '<script>
window.location.href="managerlogin.html";
alert("Login failed! Type your correct Username or Password !!")
</script>';


}
?>
