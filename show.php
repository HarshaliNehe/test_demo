<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="exam.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

</head>
<body>

  <div class="main_container">
        <div class="container">
            <img class="nav__logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhVV0grv9YcRbmKxv0x7vzTw1DnbgSXGV3hX1aMy2RCxUxcfKn">
              <div class="nav__bar">
                <i class="fa fa-bars bars"></i>
              </div> <!--nav__bar-->

              <div class=nav__links>
                  
                  <a href="post.php">PUBLISH </a>
                  <p>|</p>
                  <a href="managepub.php">MANAGE PUBLICATION</a> 
                  <p>|</p>
                  <a href="index.php">LOGOUT</a>
                                 
              </div><!--nav__links-->
        </div><!--nav-->
        
        <div >


<?php
 include 'connection.php';
 $id=$_POST['show'];
 //echo $id;
 $select=mysqli_query($conn,"SELECT * FROM publication WHERE id='$id'");
  if ($select) {
  while ($r=mysqli_fetch_assoc($select)) {
    $id=$r['id'];
    $title=$r['title'];
    $comment=$r['comments'];
    $image=$r['image'];
    $website=$r['link'];
    $email=$r['phonenumber'];
    ?>
    
    
    <?php echo "selected code is: $id"; ?>
      <br><br>
      <?php echo"Title is: $title"; ?>
        <br><br>
      <?php echo"Comment is: $comment"; ?>  
      <br><br>
      <?php echo "<img src=data:image/jpg;base64,$image width=20%>";?><br><br>
      <?php echo"link is: $website"; ?>
      <br><br>
      <?php echo"contact or email_id is: $email"; ?>
      <br><br>
      

    
    
     <?php
  }
   echo "</body>";
}else{
  echo $conn->error;
}


?>
</div>
<div class="link">
   <div class="edit" >
      <?php
    $link="edit.php?id=".$id;
    echo '<a href="'.$link.'">Edit</a>';
    echo"<br>";
     ?>
   </div><!--edit-->
 
   <div class="delete" >
      <?php  
       $link="delete.php?id=".$id;
       echo '<a href="'.$link.'">delete</a>';
       ?>
  </div><!--delete-->
      
  </div><!--link-->
</div>
</div>

</body>
</html>
