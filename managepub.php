<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="exam.css">
</head>
<body>
  <div class="header">
  <h1>Show Post</h1>
</div>

   <div>
            <form class="form" method = "POST" action = "show.php">
              <div class="form-label-group">
               Enter code: <input type="text" name = "show" class="form-control" placeholder="Your code here" required autofocus><BR>
             

           
            </div>
              <button class="btn" type="submit" name = "submit" value ="submit">SHOW POST</button>

              <div class="btn">
                <a href="home.php">Back</a>
              </div>
              
           
             

            </form>
          
 
</body>

<p id = "result"></p>




</body>
</html>
