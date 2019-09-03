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
                  
                   <a href="register.php">Register</a>
                   <p>|</p>
                  <a href="login.php">login</a>
                 
                                 
              </div><!--nav__links-->

        </div><!--nav-->
        
        <div class="slide">
        <div class="slideshow">
          <div class="mySlides fade">
          
          <img src="img7.jpeg" style="width:100%; ">
  
       </div><!--mySlides fade-->

       <div class="mySlides fade">
        
          <img src="img5.jpg" style="width:100%; ">
       </div><!--mySlides fade-->

       <div class="mySlides fade">
      
          <img src="image4.jpg" style="width:100%; ">
       </div><!--mySlides fade-->

</div><!--slideshow-->


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div><!--slide-->


<script>
  //validation of slideshow
var index = 0;
show();

function show() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) 
  {
    slides[i].style.display = "none";  
  }

  index++;

  if (index > slides.length)
   {
    index = 1
   }    
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[index-1].style.display = "block";  
  dots[index-1].className += " active";
  setTimeout(show, 2000); // Change image every 2 seconds
}
</script>
  </body>
</html>