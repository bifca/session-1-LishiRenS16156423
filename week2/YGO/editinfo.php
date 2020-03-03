<html>
	<link rel="stylesheet" href="css/style_editinfo.css" type="text/css" > 
<body background="icons/bg1.png" style="background-repeat: repeat; background-size: 100%, 100%;
  background-attachment: cover;">
  <div class="intro"><h1>Edit information</h1></div>
<div align="center">
<div style="width:300px; border: solid #555555; display :inline-block; background-color:#FFF; border-radius: 30px;" >
<div style="background-color:#555555; padding:3px; color:#fff; font-size: 25px; text-align: center; border-top-left-radius: 26px; border-top-right-radius: 26px; ">
<b>Edit here</b></div>


<div style="margin:20px">

<form action="" method="post">

</form>
<?php
include 'config.php';


$id = $_GET["id"];
$sql = "SELECT Card_Name, primary_type, secondary_type, attribute, race FROM diyygocard WHERE number = $id";
	
    $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
       $Card_Name = $row['Card_Name'];
       $primary_type = $row["primary_type"];
       $secondary_type = $row["secondary_type"];
	     $attribute = $row['attribute'];
       $race = $row["race"];
       }
   }
   ?>
<form action="updateinfo.php" method="POST">
<br>
	<input type="text" name="number" value="<?php echo $id; ?>" style="display: none;">
<br>
<label>Name</label> <input type="text" class="box" value="<?php echo $Card_Name;?>" name="Card_Name"><br />
<br>
<label>Primary Type</label> <input type="text" class="box" value="<?php echo $primary_type;?>" name="primary_type"><br />
<br>
<label>Secondary Type</label>  <input type="text" class="box" value="<?php echo $secondary_type;?>" name="secondary_type"><br />
<br>
<label>Attribute</label>  <input type="text" class="box" value="<?php echo $attribute;?>" name="attribute"><br />
<br>
<label>Race</label>  <input type="text" class="box" value="<?php echo $race;?>" name="race"><br />
<br>
<input type="submit" class="button">
</form>