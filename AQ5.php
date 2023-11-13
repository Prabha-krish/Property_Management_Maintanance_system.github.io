<!DOCTYPE html>
<html lang="en">
<html>
<title> Property Management Maintenance Organization query 5 </title>
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
	margin-left: 550px;
	text-align:center;
	margin-top: 60px;
	color:#d9d9d9;
	font-size: 20px;
	font-family: Times New Roman;

}

p{
	text-align:center;
	text-shadow: 2px 2px 5px #8600b3;
	color:#d9d9d9;
	text-transform: uppercase;
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
<h3> Query 5- Job categories that have been completed or are currently being worked on in Units. </h3>
<?php
        $username="fmb22171";
	$password="ep6wahb0siMu";
	$database="fmb22171";
	$servername="devweb2022.cis.strath.ac.uk";
	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error)
	{ die("Connection failed! " .$conn->connect_error); } 

       $sql4 = "SELECT Units.Unit_id, Units.Location, Maintenance_jobs.Job_category
		FROM Units
		INNER JOIN Maintenance_jobs ON Units.Unit_id = Maintenance_jobs.Unit_id";
							



          if (!($result = $conn->query($sql4)))
          { die("Could not execute query!<br>" .$conn->error); }

           
         if ($result->num_rows == 0)
	   { echo "<p>No rows found</p>"; }
else
	 { 	echo" <h2> Job Categories of Maintanance company curretly working on or completed.</h2>"; 
echo "<table  border=\"1\"><tr><th bgcolor=\"black\">Unit_id</th>";
     	echo "<th bgcolor=\"black\">Location</th>";
		echo "<th bgcolor=\"black\">Job_category</th></tr>";
				while ($r = $result->fetch_assoc())
		{echo "<tr><td>".$r['Unit_id']."</td><td>".$r['Location']."</td>";
		   echo "<td>".$r['Job_category']."</td></tr>"; }
		echo "</table>";
	}

 
$conn->close();


?>
</header>
</body>
</html>