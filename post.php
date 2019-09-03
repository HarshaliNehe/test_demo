
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="exam.css">


</head>
<body>
<?php
      include'connection.php';
      
      if(isset($_POST['submit']))
       {

          $title=$_POST['title'];
          $comments=$_POST['comments'];
          $link=$_POST['link'];
          $image=$_FILES['image']['tmp_name'];
          $phonenumber=$_POST['phonenumber'];
            if($image)
            {
                    $fileopen=fopen($image, "r");//open the file in read mode
                    $image_open= fread( $fileopen,filesize($image));//read file
                    $image = base64_encode($image_open);
          
             $query=mysqli_query($conn,"INSERT INTO publication(title,comments,image,link,phonenumber) VALUES ('$title','$comments','$image','$link','$phonenumber')");
              //values are inserted then generate a code
                        if(!$conn)
                        {
                            echo "connected sucessfully";
                        }

                        else
                        {
                          echo $conn->error;
                        }
                       header('location:home.php');
                     } 
            }      
  
  ?>



    <div class="main_container">
        <div class="header">
                <h2>POST</h2>
                <hr>
        </div><!--header-->

        <div class="form">

        <form  method="post" action="" enctype="multipart/form-data">
            <div class="input-group">
             TITLE:
                <input type="text" name="title" id="name" placeholder="Enter Title" class="input-field" required>
            </div>

            

            <div class="input-group">
             COMMENTS:
                <input type="text" name="comments" id="comments" placeholder="Enter Comments" class="input-field" required>
            </div>

            <div class="input-group">
            Link:
                <input type="text" name="link" id="msg" placeholder="Enter link" class="input-field" required>
            </div>

            <div class="input-group">
            Email / Contact:
                <input type="number" name="phonenumber" id="number" placeholder="Enter email or phone number" class="input-field" required>
            </div>

            <div class="input-group">
              Profile:
                <input type="file" name="image" id="image" placeholder="Choose Image" class="input-field" style="height: 20px;width:100px;" >
            </div> 

                           <input  type="submit" name="submit" value="submit" class="btn">
                           <div class="btn">
                           <a href="home.php">BACK</a>
                         </div>
         
    </form>
    
  </body>
	</html>