<?php
session_start();
include 'config.php';
?>
<html>

<head>
	<title>PHP File Edit</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
body{
	color: white;
}
button{
  display: inline-block;
  float: right;
  background: white;
  border:black;
  border-radius: 14px;
  padding-left: 18px;
  padding-right: 15px;
  padding-bottom: 7px;
  padding-top: 8px;
  font-weight: bold;
  color: #fff;
  box-shadow:0px 0px 10px 0px #222222;
  margin-right: 20px;
  
}
.edit{
	height: 40px;
}
button{
	cursor: pointer;
}
.buttons {
	color: black;
	text-decoration: none;
	cursor: pointer !important;
}
.buttons:hover {
	color: white !important;
	text-decoration: underline !important;
	cursor: pointer !important;
}

tr:nth-child(even) {background-color: none;}
</style>
</head>
<body bgcolor="#999999">

<nav class="buttons">
	 <button><a href="login.php" class="buttons">Login</a></button>  
	 <button><a href="register.php" class="buttons">Register</a></button> 
	 <button><a href="index.php" class="buttons">Logout</a></button>    
</nav>

<?php

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM diyygocard";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table><th>Card_Name</th><th>primary_type</th><th>secondary_type</th><th>attribute</th>";
         while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td> " . $row["Card_Name"] . "</td><td> " . $row["primary_type"] . "</td>
			 <td> " . $row["secondary_type"] .       "</td><td>" . $row["attribute"] . "</td> 


       <td><a href='editinfo.php?id=".$row["number"]."' ><img src='images/set.jpg' class='edit'></a>


       </td></tr>";

         }
        echo "</table>";

    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>



</body>
</html>
