 <?php 
include 'connection.php';

?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>dashboard</title>

 <style type="text/css">
  

	 body{background-color: black;}
 	 header {width:100%; height: 100px; margin:auto auto; background-color: #ff9933; position: fixed;top: 0; z-index: 9999;}
 	 h1{color:#cc2900;font-size:60px;font-weight: bold; font-family: sans-serif; margin:auto auto ; margin-left:30px; margin-top:25px;}
 	 th {background-color: grey;color: black; font-weight: bold;}
 	table, th, td {border: 2px solid black;border-collapse:collapse ;cell-padding:20px; margin-top: 50px;margin-bottom: 20px; margin-left: 60px;width: 600px; text-align: center;font-family: sans-serif;font-size: 25px;}

</style>
 </head>

 <body>

<header><h1>ADMIN PANEL</h1></header>
<h2 style="font-family:sans-serif;font-size:40px;font-weight: bold;position: absolute;top: 230px;left:250px;z-index: 99; ">MANAGE MENU FROM HERE ...</h2>
<div id="desk" style="position: absolute;top: 200px;background-color: white; width:900px; height: auto; left: 230px; display: flex; ">

<DIV style="background-color: lightgrey; width: 80%; height: auto; margin-top: 150px; margin-left: 90px;">
	

<?php 
include 'connection.php';

$id=$_GET['id'];
$item_id=$_GET['item_id'];


if($id=='1')
  { $query2="DELETE from traditional_dessert where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 style='font-size:50px;font-weight:bold;'>deleted item successfully</h1>";
       $page = 'dessertitems.php?desser_id=1';
       $sec = "1";
       header("Refresh: $sec; url=$page");
      
    }

if($id=='2')
  {$query2="DELETE from special_dessert where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'dessertitems.php?desser_id=2';
       $sec = "1";
       header("Refresh: $sec; url=$page");

    }


     ?>

</DIV>





</div>	

 </body>

 </html>