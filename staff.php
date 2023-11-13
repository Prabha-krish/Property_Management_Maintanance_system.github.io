<!DOCTYPE html>
<html lang="en">
<html>
<title> Property Management Maintenance Organization query 4 </title>
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

margin-left: 385px;


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
<h3> Secretarial staff member's details</h3>
<?php
        $username="fmb22171";
	$password="ep6wahb0siMu";
	$database="fmb22171";
	$servername="devweb2022.cis.strath.ac.uk";
	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error)
	{ die("Connection failed! " .$conn->connect_error); } 

       $sql4 = "SELECT * from Secretarial_staff";
							



          if (!($result = $conn->query($sql4)))
          { die("Could not execute query!<br>" .$conn->error); }

           
         if ($result->num_rows == 0)
	   { echo "<p>No rows found</p>"; }
else
	 { echo" <h2>Manager with their Staffs </h2>"; 	
		echo "<table  border=\"1\"><tr><th bgcolor=\"black\">Staff_id</th>";
     		echo "<th bgcolor=\"black\">Emp_no</th>";
		echo "<th bgcolor=\"black\">Staff_Name</th>";
		echo "<th bgcolor=\"black\">Email</th>";
		echo "<th bgcolor=\"black\">Team_no</th>";
		echo "<th bgcolor=\"black\">Manager_id</th>";
		echo "<th bgcolor=\"black\">Unit_id</th></tr>";
				
		while ($r = $result->fetch_assoc())
		{echo "<tr><td>".$r['Staff_id']."</td><td>".$r['Emp_no']."</td>";
		   echo "<td>".$r['Staff_Name']."</td><td>".$r['Email']."</td><td>".$r['Team_no']."</td>
			<td>".$r['Manager_id']."</td><td>".$r['Unit_id']."</td></tr>"; }
		echo "</table>";
	}

 
$conn->close();


?>
</header>
</body>
</html>