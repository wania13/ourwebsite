<?php 
include 'connection.php';
include 'delete.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>offers</title>
</head>
<body>
		
	<form action="" method="POST" enctype="multipart/form-data">
		
		<br>photo_id: <input type="text" name="photo_id" placeholder="enter photo number"> <br><br>
		photo_name: <input type="text" name="photo_name" placeholder="enter photo name here"><br><br>
		<input type="file" name="image">
		<input type="submit" name="submit">
    </form>

    <form action="" method="POST">
		<input type="submit" value="show all" name="show">
	</form>

		<?php 

 			if (isset($_POST['submit']))
				{
					$photo_id=$_POST['photo_id'];
					$photo_name=$_POST['photo_name'];
					$filename=$_FILES['image']['name'];
					$tempname=$_FILES['image']['tmp_name'];
					$folder='picture/'.$filename;
					move_uploaded_file($tempname, $folder);
					echo "<img src='$folder' width='100' height='100'/>";


					$query="INSERT into photos values ('$photo_id','$photo_name','$folder')";
					mysqli_query($conn,$query);
					echo "<br>picture uploaded";
				}
			 ?>



 

  <table cellpadding="30px" border="2" margin-top="100px">
  			<th>photo_id</th>
  			<th>photo_name</th>
  			<th>image</th>
			<th>operation</th>

  			<?php  
			if(isset($_POST['show']))
			{   
				$query="SELECT * FROM photos";
				$results=mysqli_query($conn,$query);
				while($answer=mysqli_fetch_array($results))
				{
         	
				echo "<tr>";
			     
				echo "<td>".$answer['photo_id']."</td>"	;			
				echo "<td>".$answer['photo_name']."</td>";
				echo "<td><img src='".$answer['photo_img']."' style='width:100px'/></td>";
				echo "<td><button style='background-color: red;width: 90px;height: 50px;text-align:center;'><a style='text-decoration:none ; color:white;' href=delete.php?photo_id=".$answer['photo_id'].">DELETE</a></button></td>";

				echo "</tr>";

		
	
		    	}
			 }
			 ?>
















  </table>

</body>
</html>