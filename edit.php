
<!DOCTYPE html>
<html>
<head>
	<title>Post Something</title>
	<link rel="stylesheet" href="exam.css">
</head>
<body>
	<?php
	
	require 'connection.php';
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	    $select=mysqli_query($conn,"SELECT * FROM publication WHERE id='$id'");
	    $num_rows=mysqli_num_rows($select);
	    if ($num_rows>0)
	     {
	    	while ($row=$select->fetch_assoc()) 
	    	{
	    		$id=$row['id'];
	    		$title=$row['title'];
	    		$comment=$row['comments'];
	    		$image=$row['image'];
	    		$website=$row['link'];
	    		
	    	}
	    }
	}

	?>

    <center>    
	<h1>Edit Post</h1>
</center>
	<form method="POST" action="" enctype="multipart/form-data">
		<label>title</label>
		<input type="text" name="title" value="<?php echo $title ?>"><br><br>

		<label>comment</label>
		<input type="text" name="comment" value="<?php echo $comment ?>"><br><br>

        <label>Image</label>
		<?php echo "<img src= data:image/jpg;base64,$image>";?>
		<input type="file" name="image"><br><br>

		<label>website</label>
		<input type="text" name="website" value="<?php echo $website ?>"><br><br>
 <?php echo" After edition information is:"?>
		<input type="submit" name="submit" value="Edit" class="btn">

	<?php
	include 'connection.php';
	

	if(isset ($_POST['submit'])){
		$title=$_POST['title'];
		$comment=$_POST['comment'];
		$website=$_POST['website'];	
		$imagepath=$_FILES['image']['tmp_name'];
		 echo "title : ".$title;	
		 echo "<br>";
		 echo "comment : ".$comment;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";
		 echo "website : ".$website;
		 echo "<br>";
		 
		 if($imagepath=$row['image'])
		 {
    echo "<img src=data:image/jpg;base64,$image ><br>"  ;
		 
		 
		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$picture =base64_encode($binary);

		 	echo $picture;
		 	
		 	$update=mysqli_query($conn,"UPDATE publication_info SET title='$title',comment='comment',image='$picture',website='website' WHERE id='$id'");
		 	if($update){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}

		 }
		 else{
		 	$update=mysqli_query($conn,"UPDATE publication SET title='$title',comment='$comment',website='$website' WHERE id='$id'");
		 	
		 	}




	
}








	?>
   <div class="btn">
	 <a href="home.php">Back</a>
	</div>
       

	</form>

</body>
</html>
