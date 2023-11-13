<!DOCTYPE html>
<html lang="en">
<html>
<title> Property Management Maintenance Organization query1 </title>
<style>
*{
	margin: 0;
	padding:0;
}
.wrapper{
	width:1170px;
	margin:auto;
}
header{
	background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)),url("lo.jpg");
height: 100vh;
    background-size: cover;
	background-position: center;
	position: relative;
}

h3{
text-align:center;
 text-shadow: 2px 2px 5px #8600b3;
	
	color:#d9d9d9;
	text-transform: Sentencecase;
	font-size: 20px;
	font-family: Times New Roman;

}
.logo img{
	
	width: 70px;
	height: auto;
	float:left;
	 margin-left: 60px;
margin-top: 10px;
}

h2{

text-align:center;
margin-top: 50px;
	color:#d9d9d9;
	
	font-size: 25px;
	font-family: Times New Roman;
float: center;


}
table{
float: center;

margin-left: 590px;

text-align:center;
margin-top: 60px;
	color:#d9d9d9;
		font-size: 20px;
	font-family: Times New Roman;

}
p{
text-align:center;
margin-top: 50px;
	color:#d9d9d9;
	
	font-size: 25px;
	font-family: Times New Roman;
float: center;

}


</style>
<body>

<header>
<div class ="Wrapper">
<div class="logo">
<img src ="logo3.jpg" alt="BTS">
</div>

<h3> Query 1- Managers who manage sites fall under a specific estate based on the query entered by the user.</h3>

</div>
<?php


        $username="fmb22171";
	$password="ep6wahb0siMu";
	$database="fmb22171";
	$servername="devweb2022.cis.strath.ac.uk";
	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error)
	{ die("Connection failed! " .$conn->connect_error); } 
        $search1=mysqli_real_escape_string($conn,$_POST['find']);

       $sql1 = "SELECT Sites.Site_id, Sites.Site_name,Manager.Manager_Name FROM Sites
       JOIN Manager ON Sites.Site_id = Manager.Site_id
       WHERE Sites.Estate_id = '$search1'
       GROUP BY Sites.Site_id, Manager.Manager_Name";


          if (!($result = $conn->query($sql1)))
          { die("Could not execute query!<br>" .$conn->error); }

           
         if ($result->num_rows == 0)
	   { echo "<p>No rows found</p>"; }
else
	 { echo" <h2>Managers for Estate id: $search1 </h2>";	
echo "<table  border=\"2\"><tr><th bgcolor=\"black\">Site_id</th>";
     	echo "<th bgcolor=\"black\">Site_name</th>";
		echo "<th bgcolor=\"black\">Manager_Name</th></tr>";
		while ($r = $result->fetch_assoc())
		{ echo "<tr><td>".$r['Site_id']."</td><td>".$r['Site_name']."</td>";
           echo "<td>".$r['Manager_Name']."</td></tr>"; }
		echo "</table>";
	}

 
$conn->close();


?>
</header>
</body>
</html>