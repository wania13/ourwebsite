<?php 
include 'connection.php';
include 'delete.php';
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>dashboard</title>

 <style type="text/css">
  

	 body{background-color: black;}
 	 header {width:100%; height: 100px; margin:auto auto; background-color: #ff9933; position: fixed;top: 0; z-index: 9999;}
 	 h1{color:#cc2900;font-size:60px;font-weight: bold; font-family: sans-serif; margin:auto auto ; margin-left:30px; margin-top:25px;}
 	
</style>
 </head>

 <body>

<header><h1>ADMIN PANEL</h1></header>
<h2 style="font-family:sans-serif;font-size:40px;font-weight: bold;position: absolute;top: 230px;left:200px;z-index: 99; ">MANAGE OFFERS FROM HERE ...</h2>

<div id="desk" style="position: absolute;top: 200px;background-color: white; width: auto; height: auto; left: 130px; display: flex; ">


	<div id="form1" style="background-color: lightgrey; width: 40%; height: 700px; margin-top: 150px; margin-left: 30px;" >
		<br><br>
		<h2 style="text-align: center;font-size: 25px;font-family: sans-serif;">Upload new offers</h2>
		<form action="" method="POST" enctype="multipart/form-data">
		    
			<br><br><br>
			<label for="first" style="font-size: 30px;margin-left: 30px;">photo_id:</label> <input style="width: 150px;height: 60px;font-size: 30px;"type="text"  name="photo_id" id="first" required> <br><br>
			<label for="second" style="font-size: 30px;margin-left: 30px;">photo_name:</label> <input type="text"style="width: 150px;font-size: 30px;height: 60px;" name="photo_name" id="second"><br><br>
			<input type="file" name="image" style="margin-left: 30px;font-size: 20px;" ><br><br><br><br>
			<input type="submit" name="submit"style="width: 150px;height: 60px;margin-left: 30px;background-color: green;color: white;font-size: 30px;">

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

	</div>


	   










	<div id="form2" style="background-color: lightgrey; width: 60%; height: auto; margin-top: 150px; margin-left: 30px;margin-right: 30px;" >
		<br><br>
		<h2 style="text-align: center;font-size: 25px;font-family: sans-serif;">Delete or View</h2>

		<form action="" method="POST">
		<input type="submit" value="show all" name="show" style="width: 150px;height: 60px;margin-left: 30px;background-color:blue;color:white;font-size: 30px;">
	    </form>


	

       

			 <table cellpadding="30px" border="1" margin-top="100px" style="box-sizing: border-box;font-size: 20px;">
  			<tr>
  			<th>photo_id</th>
  			<th>photo_name</th>
  			<th>image</th>
			<th>operation</th>
		    </tr>


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













	</div>




</div>






 </body>

 </html>