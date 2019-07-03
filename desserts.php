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

$id=$_GET['submenu_id'];
include 'connection.php';


 echo "<TABLE>";
  

    echo  "<tr height='40px'>";
    echo  "<th>NO.</th>";
    echo  "<th >SUB CATAGORIES</th>";
    echo  "<th> OPERATIONS </th>";
    echo  "</tr>";

if($id=='10')
  {$query2="SELECT * from  desserts";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['desser_id']."</button></td>";
                    echo "<td>".$answer['dessert_name']."</td>";
                echo "<td><button style='background-color: orange;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;font-size:15px;' href=dessertitems.php?desser_id=".$answer['desser_id'].">ITEMS</a></button></td>";
               
                      }
                        

    }


  echo "</TABLE><br>"; 
  ?>
</DIV>





</div>	

 </body>

 </html>