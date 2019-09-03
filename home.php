<?php
include'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>COMPUTERS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--link-->
		<link rel="stylesheet" type="text/css" href="exam.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
	<div class="main_container">
        <div class="container">
            <img class="nav__logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhVV0grv9YcRbmKxv0x7vzTw1DnbgSXGV3hX1aMy2RCxUxcfKn">
              <div class="nav__bar">
                <i class="fa fa-bars bars"></i>
              </div> <!--nav__bar-->

              <div class=nav__links>
                  <a href="post.php">BACK</a> 
                  <p>|</p>
                  <a href="post.php">PUBLISH </a>
                  <p>|</p>
                  <a href="managepub.php">MANAGE PUBLICATION</a> 
                  <p>|</p>
                  <a href="index.php">LOGOUT</a>

                                 
              </div><!--nav__links-->
        </div><!--nav-->
        <div >

<div class="php">
<?php

$sql=mysqli_query($conn,"SELECT * FROM publication ");
$num=mysqli_num_rows($sql);
if($num==0)
{
  echo "no post";
}
else
{

  while($rows=$sql->fetch_assoc())
  {
    

    $id=$rows['id'];
    $title=$rows['title'];
    $link=$rows['link'];
    $comments=$rows['comments'];
    $phonenumber=$rows['phonenumber'];
    $image=$rows['image'];
  }
  ?>
  
  <div class="image">
    <?php
   // if($img=$rows['image'])
    echo "<img src=data:image/jpg;base64,$image ><br>";
    ?>
   </div><!--image-->
  <div class="display">
  <?php
  echo " Title is:$title <br>";
  echo "Comments is :$comments <br>";
  echo "Phonenumber is :$phonenumber <br>";
  echo "Link is:$link <br>";
  echo date("d.y.m")
  ?>
  
 </div><!--display-->
</div><!--php-->
 <?php
  
}
?>


        
  </body>
</html>