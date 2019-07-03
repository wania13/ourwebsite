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
  { $query2="DELETE from continental where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=1';
       $sec = "1";
       header("Refresh: $sec; url=$page");
      
    }

if($id=='2')
  {$query2="DELETE from fried_items where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=2';
       $sec = "1";
       header("Refresh: $sec; url=$page");

    }


if($id=='3')
  {$query2="DELETE from steamed where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=3';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }


if($id=='4')
  {$query2="DELETE from bbq_items where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=4';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }

if($id=='5')
  {$query2="DELETE from chinese_cuisine where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=5';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }

if($id=='6')
  {$query2="DELETE from soups where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
      echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=6';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }

if($id=='7')
  {$query2="DELETE from titbits where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
      echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=7';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }

if($id=='8')
  {$query2="DELETE from snacks where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=8';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }

if($id=='9')
  {$query2="DELETE from others where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
      echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=9';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }


if($id=='10')
  {$query2="SELECT * from desserts where ";
     $results=mysqli_query($conn,$query2);
    }


if($id=='11')
  {$query2="DELETE from thirst where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
    echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=11';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }

if($id=='12')
  {$query2="DELETE from ice_cream where item_id='$item_id'";
       $results=mysqli_query($conn,$query2);
       echo "<h1 id='statement'style='font-size:50px;font-weight:bold;color:#cc2900;'>deleted item successfully</h1>";
       $page = 'items.php?submenu_id=12';
       $sec = "1";
       header("Refresh: $sec; url=$page");
    }


 ?>














</DIV>





</div>	

 </body>

 </html>