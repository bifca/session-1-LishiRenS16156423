<!DOCTYPE html>
<html lang="en">
<head>
  <title>My DIY YGOcard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<link rel="stylesheet" href="css/style.css" type="text/css" > 
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php
   require 'var.php';
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "SELECT Card_Name, primary_type, secondary_type, attribute, race, rank, images FROM alola WHERE number = $id";
   $result = mysqli_query($conn, $sql);
   $ygoimage = mysqli_query($conn, $sql);
  ?>
<div class="container">
	<div>
  	<h2 style="text-align: center;">Recent works</h2>
 	</div>
 	<div class="container">
		<div>
			<a href="login.php" style="text-align: center;">Login/Register</a>
		</div>
	</div>
  <div class="row">
    <section class="col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="icon" src="images/card1.png" alt="Icon" width="100%">
      <h3>芙露蕾蒂</h3>
      <p>拥有保护我方卡片以及无效对手卡片的效果。</p>
    </section>

    <section class="col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="icon" src="images/card2.png" alt="Icon" width="100%">
      <h3>杰达鲁</h3>
      <p>拥有恐怖的攻击力以及强制对手战斗的效果。</p>
    </section>

    <section class="col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="icon" src="images/card3.png" alt="Icon" width="100%">
      <h3>罗查莉多</h3>
      <p>有一定的卡组检索能力。</p>
    </section>

    <section class="col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="icon" src="images/card4.png" alt="Icon" width="100%">
      <h3>米库莉</h3>
      <p>可以破坏对手的魔法陷阱卡并增强自己的攻击力。</p>
    </section>

    <section class="col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="icon" src="images/card5.png" alt="Icon" width="100%">
      <h3>优特雷</h3>
      <p>可以干扰和封锁对手的特殊召唤。</p>
    </section>

    <section class="col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="icon" src="images/card6.png" alt="Icon" width="100%">
      <h3>由娜奇</h3>
      <p>可以对对手的怪兽卡造成强力的破坏。</p>
    </section>   
  </div><!-- row -->   
</div><!-- content container -->

</body>
</html>