<!DOCTYPE html>
<html lang="en">
<html>
<title> Property Management Maintenance Organization query 2 </title>
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
	margin-left: 420px;
	text-align:center;
	margin-top: 60px;
	color:#d9d9d9;
	font-size: 20px;
	font-family: Times New Roman;

}
</style>

<header>
<div class ="Wrapper">
<div class="logo">
<img src ="logo3.jpg" alt="BTS">
</div>
</div>

<body>
<h3> Query-2 Tenants who have not paid their monthly rent for their units </h3>

<?php

        $username="fmb22171";
	$password="ep6wahb0siMu";
	$database="fmb22171";
	$servername="devweb2022.cis.strath.ac.uk";
	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error)
	{ die("Connection failed! " .$conn->connect_error); } 

       $sql2 = "SELECT Tenants.Tenant_id,Tenants.Tenant_name,Units.Unit_No, Units.Location, Tenants.Lease_enddate, Tenants.Payment_status
                FROM Tenants
		INNER JOIN Units ON Tenants.Unit_id = Units.Unit_id
		WHERE Tenants.Payment_status='Paid'
		AND Tenants.Lease_enddate = (SELECT Max(Lease_enddate) from Tenants 
                                             WHERE Payment_status='Paid' AND
                                             Tenants.Unit_id = Units.Unit_id)";



          if (!($result = $conn->query($sql2)))
          { die("Could not execute query!<br>" .$conn->error); }

           
         if ($result->num_rows == 0)
	   { echo "<p>No rows found</p>"; }
else
	 { 	
echo" <h2> Details of Tenants who have already paid monthly rent.</h2>";
echo "<table  border=\"1\"><tr><th bgcolor=\"black\">Tenant_id</th>";
     	echo "<th bgcolor=\"black\">Tenant_name</th>";
		echo "<th bgcolor=\"black\">Unit_No</th>";
		echo "<th bgcolor=\"black\">Location</th>";
		echo "<th bgcolor=\"black\">Lease_enddate</th>";
		echo "<th bgcolor=\"black\">Payment_status</th></tr>";
		while ($r = $result->fetch_assoc())
		{echo "<tr><td>".$r['Tenant_id']."</td><td>".$r['Tenant_name']."</td>";
		   echo "<td>".$r['Unit_No']."</td><td>".$r['Location']."</td><td>".$r['Lease_enddate']."</td><td>".$r['Payment_status']."</td></tr>"; }
		echo "</table>";
	}

 
$conn->close();


?>
</header>
</body>
</html>