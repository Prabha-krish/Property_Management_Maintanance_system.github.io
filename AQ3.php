<!DOCTYPE html>
<html lang="en">
<html>
<title> Property Management Maintenance Organization query 3 </title>
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

margin-left: 480px;


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

<body>
<h3> Query 3 Ongoing maintenance work in units and with the name of the company, responsible for the completion of specific maintenance work. </h3>
</div>
<?php
        $username="fmb22171";
	$password="ep6wahb0siMu";
	$database="fmb22171";
	$servername="devweb2022.cis.strath.ac.uk";
	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error)
	{ die("Connection failed! " .$conn->connect_error); } 

       $sql3 = "SELECT Maintenance_jobs.Unit_id, Maintenance_jobs.Description, Maintenance_jobs.Status, Maintenance_jobs.End_date,
 		(SELECT Maintenance_company.Company_name
  		FROM Maintenance_company
  		WHERE Maintenance_jobs.Job_id = Maintenance_company.Job_id) AS Company_name
		FROM Maintenance_jobs
		WHERE Maintenance_jobs.Status = 'On going'";
							



          if (!($result = $conn->query($sql3)))
          { die("Could not execute query!<br>" .$conn->error); }

           
         if ($result->num_rows == 0)
	   { echo "<p>No rows found</p>"; }
else
	 { 	echo" <h2>Information about on going maintance works </h2>";
echo "<table  border=\"1\"><tr><th bgcolor=\"black\">Unit_id</th>";
     	echo "<th bgcolor=\"black\">Description</th>";
		echo "<th bgcolor=\"black\">Status</th>";
		echo "<th bgcolor=\"black\">End_date</th>";
		echo "<th bgcolor=\"black\">Company_name</th></tr>";
		
		while ($r = $result->fetch_assoc())
		{echo "<tr><td>".$r['Unit_id']."</td><td>".$r['Description']."</td>";
		   echo "<td>".$r['Status']."</td><td>".$r['End_date']."</td><td>".$r['Company_name']."</td></tr>"; }
		echo "</table>";
	}

 
$conn->close();


?>
</header>
</body>
</html>