<?php 
 include_once'connection.php';   
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGI_IN_FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="exam.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="main_container">
        <div class="header">
                <h2>Login Form</h2>
                <hr>
        </div><!--header-->

        <div class="form">

        <form  method="post" action="">
            <div class="input-group">
             User Name:
                <input type="text" name="username" placeholder="User name" class="input-field" required>
            </div>

            <div class="input-group">
                Password:
                <input type="password" name="password" placeholder="password" id="pass" class="input-field" required>
            </div>
            
         
                <input  type="submit" name="Login" value="Login" class="btn">
         
		</form>
    
    <?php
    if (isset($_POST['Login']))
     {
        $username=addslashes($_POST['username']);
        $password=addslashes($_POST['password']);

        $q=mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username' && password='$password'");
        $row=mysqli_num_rows($q);
        if ($row>0) 
        {
            header('location:home.php');
        }
     else
     
        echo"Enter correct username and password";
    }

    ?>
    </div><!--form-->
    </div>

</body>
</html>