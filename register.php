
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="exam.css">


</head>
<?php
      include'connection.php';
      
      if(isset($_POST['submit']))
       {

          $name=$_POST['name'];
          $password=$_POST['password'];
          $yname=$_POST['yname'];
          $email=$_POST['email'];
          
          
             $query=mysqli_query($conn,"INSERT INTO admin(username,password,yname,email) VALUES ('$name','$password','$yname','$email')");
              //values are inserted then generate a code
                        if(!$conn)
                        {
                            echo "connected sucessfully";
                        }

                        else
                        {
                          echo $conn->error;
                        } 
                        header('location:login.php');
            }      
  
  ?>

<body>

    <div class="main-container">
       
      <div class="header">
        Registration Form
      </div><!--header--><hr>
      <div class="form">

        <form action="" method="post" enctype="multipart/form-data" >
      
            <div class="input-group">             
              Enter Name:
             <input type="text" id="name" name="yname" placeholder=" Enter your name" required>
           </div>

           <div class="input-group">             
              Enter Email_id:
             <input type="text" id="name" name="email" placeholder=" Enter your email"required>
           </div>

           <div class="input-group">
             Enter password:
             <input  type="password" placeholder="password" name="password"  id="password" required>
           </div>
          

           <div class="input-group">             
              Enter UserName:
            <input type="text" id="name" name="name" placeholder=" Enter user name"required>
           </div>

           <div class="links">
             <div>
              <input type="submit" name="submit" class="submit" >
             </div><!--submit-->

             <div class="back">
                <a href="index.php">BACK</a>
             </div><!--submit-->

            </div><!--links-->
     
     </form>
     
  </div><!--form-->
   
</div><!--main_con-->
 
  </body>
  </html>

