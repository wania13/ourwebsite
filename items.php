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
 	table, th, td {border: 2px solid black;border-collapse:collapse ;cell-padding:20px; margin-top: 50px;margin-bottom: 20px; margin-left: 30px;width: 800px; text-align: center;font-family: sans-serif;font-size: 20px;}

</style>
 </head>

 <body>

<header><h1>ADMIN PANEL</h1></header>
<h2 style="font-family:sans-serif;font-size:40px;font-weight: bold;position: absolute;top: 230px;left:250px;z-index: 99; ">MANAGE MENU FROM HERE ...</h2>
<div id="desk" style="position: absolute;top: 200px;background-color: white; width:900px; height: auto; left: 230px; display: flex; ">

<DIV style="background-color: lightgrey; width: 95%; height: auto; margin-top: 150px; margin-left: 20px;">
	

<?php 

$id=$_GET['submenu_id'];
include 'connection.php';


 echo "<TABLE>";
  

    echo  "<tr height='40px'>";
    echo  "<th>NO.</th>";
    echo  "<th >FOOD ITEM</th>";
    echo  "<th> OPERATIONS </th>";
    echo  "</tr>";



if($id=='1')
  {
     $query2="SELECT * from continental";
       $results=mysqli_query($conn,$query2);
      
    
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=1&item_id=".$answer['item_id'].">DELETE</a></button>
                <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=1&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               }

                if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into continental values ($id,$item_id,'$item_name')";
                    $results=mysqli_query($conn,$query2);
                    
                 }


  }



if($id=='2')
  {$query2="SELECT * from fried_items";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=2&item_id=".$answer['item_id'].">DELETE</a></button> 
                <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=2&item_id=".$answer['item_id'].">UPDATE</a></button></td>";

                    echo "</tr>";
               
                      }
              if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into fried_items values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }


if($id=='3')
  {$query2="SELECT * from steamed";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=3&item_id=".$answer['item_id'].">DELETE</a></button> 
              <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=3&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }

                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into steamed values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }


if($id=='4')
  {$query2="SELECT * from bbq_items";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=4&item_id=".$answer['item_id'].">DELETE</a></button>
               <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=4&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }

                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into bbq_items values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }

if($id=='5')
  {$query2="SELECT * from chinese_cuisine";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=5&item_id=".$answer['item_id'].">DELETE</a></button>
               <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=5&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into chinese_cuisine values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }

if($id=='6')
  {$query2="SELECT * from soups";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=6&item_id=".$answer['item_id'].">DELETE</a></button>
               <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=6&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into soups values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }

if($id=='7')
  {$query2="SELECT * from titbits";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=7&item_id=".$answer['item_id'].">DELETE</a></button> 
              <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=7&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into titbits values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }

if($id=='8')
  {$query2="SELECT * from snacks";
    $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=8&item_id=".$answer['item_id'].">DELETE</a></button>
               <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=8&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into snacks values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }

if($id=='9')
  {$query2="SELECT * from others";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=9&item_id=".$answer['item_id'].">DELETE</a></button> 
              <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=9&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into others values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }





if($id=='11')
  {$query2="SELECT * from thirst";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=11&item_id=".$answer['item_id'].">DELETE</a></button> 
              <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=11&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into thirst values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }

if($id=='12')
  {$query2="SELECT * from  ice_cream";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id']."</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              echo "<td><button style='background-color: red;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=deleteitem.php?id=12&item_id=".$answer['item_id'].">DELETE</a></button> <button style='background-color: green;width: 100px;height: 30px;text-align:center;'><a style='text-decoration:none ; color:white;' href=updateitem.php?id=12&item_id=".$answer['item_id'].">UPDATE</a></button></td>";
                    echo "</tr>";
               
                      }
                        if (isset($_POST['inserting']))
                {  $item_id=$_POST['item_id'];
                   $item_name=$_POST['item_name']; 
                   $query2="INSERT into ice_cream values ($id,$item_id,'$item_name')";
                   $results=mysqli_query($conn,$query2);

                 }

    }


  echo "</TABLE><br>"; 



  echo "<form method='post' action='' style='font-size:20px;font-family:sans-serif;font-weight:bold; margin-bottom:30px;margin-left:50px;'>
  Enter item id here: <input type='text' name='item_id' required> <br>
  Enter item name      :  <input type ='text' name='item_name' ><br>
  <input  type='submit' name='inserting' value='INSERT NEW ITEM' style='color:white;background-color:blue;height: 50px;text-align:center;font-size:20px;font-family:sans-serif;margin-bottom:30px;margin-top:20px;margin-left:30px;'>
  </form>";
    
 



 ?>
</DIV>





</div>	

 </body>

 </html>