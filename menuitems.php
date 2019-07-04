<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title></title>
 	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <style type="text/css">*
{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}
.navbar
{
	background-color: black;
	display: flex;
	z-index: 999;
	width: 100%;
	height: 10%;
}
.navbar a
{
	color: white;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	text-transform: uppercase;
	padding: 14px 28px;
	   padding-top: 20px;
    font-size: 17px;
}
.navbar a:hover
{
	background-color: white;
	color: black;
}

#toggle
{
	display: none;

}
.togglearea
{
	background-color: black;
	border-bottom: 2px solid white;
	color: white;
	display: flex;
	position: fixed;
	z-index: 999;
	justify-content: flex-end;
	width: 100%;
}
.togglearea label
{
	background-color: black;
	height: 45px;
	width: 50px;
	color: black;
	border-radius: 6px;
	cursor: pointer;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.togglearea label span
{
	background-color: white;
	height: 4px;
	width: 70%;
	margin: 2px 0px;
}
.togglearea
{
	display: none;
}
#logo{
	margin-right: 25%;
}
@media screen and (max-width:920px)
{
	
	#logo{display: none;}
	#second{display: none;}
	#third{display: none;}
}

@media screen and (min-width: 700px)
{
	.navbar
	{
		justify-content: flex-end;
		position: fixed;
	}
}

@media screen and (max-width: 700px)
{
	.navbar
	{
		flex-direction: column;
		display: none;

	}
	#toggle:checked + .navbar
	{
		display: flex;
		position: absolute;
		height:50%;
		top:8%;

	}
	.togglearea
	{	
		display: flex;
	}
	#last{display: none;}




}

 	table,  td {margin-top: 50px;margin-bottom: 20px; margin-left: 300px;width: 600px; text-align: center;font-family: satisfy;font-size: 35px;font-weight: bold;}

html,body {height: 100%;}
#container{min-height: 100%;}
#main{overflow: auto;padding-bottom: 350px;}
#footer{position:relative;height: 350px;margin-top:-350px;clear:both; font-family:satisfy;}
#uperfooter{background-color: rgb(35, 36, 38);height: 290px;}
#downfooter{background-color: #000;height: 60px;}
.content{width:328px; height:290px; z-index:9999;  margin: auto;}
h4{color: white;font-size: 23px;margin-top: 25px; font-family: sans-serif; }
#links a{display: block;margin-left: 100px;color: white; margin-top: 5px; text-decoration: none;}
#links {margin-top: 25px;}
#fblink{margin-top: 25px;}
#MyDivName{width: 300px; height: 170px; color: white; margin-top: 25px; overflow: hidden;}
#MyDivName p {margin-top: 20px;}

#add{

	display:flex;
	margin-top: 6%;
	margin-left:10%;
	
}

#phone{

	margin-top:4%;
	display:flex;
	margin-left:10%;
}
#email{
	
	display:flex;
	margin-top:2%;
	margin-left:10%;
}


/* you can change these media size according to your design */
@media screen and (max-width:540px)
{}

@media screen and (max-width:400px)
{}


</style>





</head>
<body onLoad="scrollDiv_init()">


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>


<div id="container">
	       <div class="togglearea">
		          <label for="toggle">
			           <span></span>
			           <span></span>
			           <span></span>
		             </label> </div>
		   <input type="checkbox" id="toggle">
	         <div class="navbar">
		          <img  id="logo" src="\logofinal.jpg" width="6%" height="95%" />
		              <a href="#">Home</a>
		              <a href="#">about</a>
		              <a href="#">menu</a>
		              <a href="#">services</a>
		              <a href="#">gallery</a>
		              <a href="#">contact</a>
	          </div>



    <div id="main">

    	<div id="banner">
			<img src="\banner.jpg" width="100%" height="150%" style="margin-top: 57px;">
		</div>


<h1 style="text-align: center;color: red;font-size: 70px;font-family: satisfy">Menu</h1>
<h2 style="text-align: center;color: red;font-size: 30px;font-family: satisfy">"There is no love more sincere than the love of food"</h2>
<h2 style="text-align: center;color: red;font-size: 30px;font-family: satisfy">"We are offering wide range of catagories to make your event meamorable"</h2>


<DIV style="background-color: white; width: 95%; height: auto; margin-top: 150px; margin-left: 20px;">
	

<?php 

$id=$_GET['submenu_id'];
include 'connection.php';


 echo "<TABLE>";
  

    



if($id=='1')
  {
     $query2="SELECT * from continental";
       $results=mysqli_query($conn,$query2);
      
    
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
            }
  }



if($id=='2')
  {$query2="SELECT * from fried_items";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              }

    }


if($id=='3')
  {$query2="SELECT * from steamed";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
            }

    }


if($id=='4')
  {$query2="SELECT * from bbq_items";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
             
				}
    }

if($id=='5')
  {$query2="SELECT * from chinese_cuisine";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
             }
    }

if($id=='6')
  {$query2="SELECT * from soups";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
             }
    }

if($id=='7')
  {$query2="SELECT * from titbits";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              }

    }

if($id=='8')
  {$query2="SELECT * from snacks";
    $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
              
          }
    }

if($id=='9')
  {$query2="SELECT * from others";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
             }

    }





if($id=='11')
  {$query2="SELECT * from thirst";
      $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
             }
    }

if($id=='12')
  {$query2="SELECT * from  ice_cream";
     $results=mysqli_query($conn,$query2);
       while($answer=mysqli_fetch_array($results))
                {
              echo "<tr>";
              echo "<td>".$answer['item_id'].".</button></td>";
              echo "<td>".$answer['item_name']."</td>";
             

               }

      }
  echo "</TABLE><br>"; 
    

 ?>
</DIV>


 </div>



<footer>
	<div id="uperfooter" style="display: flex;">

		<div class="content" id="first">
			<h4 style="margin-left: 100px;">Contact Us</h4>
			<div id="quickcontact" style="margin-left:50px;">

				<div id="add" ><i class="fa fa-location-arrow" aria-hidden="true" style="color: grey;font-size: 20px;"></i> <p style="color: white;margin-left: 10px;"> Shop No. C-8, KDA Flat, Phase-4,<br> opp.Erum Shopping Emporium,</br> Shadman No.2,Sector 14-B,<br>North Karachi </br></p></div>

				<div id="phone"><i class="fa fa-mobile" aria-hidden="true" style="color: grey; font-size: 30px;"></i><p style="margin-top: 0.7%;color: white;margin-left: 14px;">03452362250 <br>03433090638</br></p></div>

				<div id="email"><i class="fa fa-envelope-o" aria-hidden="true"style="color: grey; font-size: 17px;"></i><p style="margin-top: 1%;color: white;margin-left: 10px;">haris.khalid87@gmail.com</p></div></div>
		</div>



		<div class="content" id="second"><h4 style="margin-left: 100px;";>Quick Links</h4>
			<div id="links">
				<a href="">Home</a>
				<a href="">About Us</a>
				<a href="">Menu</a>
				<a href="">Gallery</a>
				<a href="">Services</a>
				<a href="">Contact Us</a></div>
		</div>

		<div class="content"  id="third"><h4 style="margin-left: 40px;">Customer Reviews</h4>

			<script language="javascript">
				ScrollRate = 50;

			function scrollDiv_init() {
				DivElmnt = document.getElementById('MyDivName');
				ReachedMaxScroll = false;
	
				DivElmnt.scrollTop = 0;
				PreviousScrollTop  = 0;
	
				ScrollInterval = setInterval('scrollDiv()', ScrollRate);
				}

			function scrollDiv() {
	
				if (!ReachedMaxScroll) {
				DivElmnt.scrollTop = PreviousScrollTop;
				PreviousScrollTop++;
			
				ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
				}
			else {
				ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;
		
				DivElmnt.scrollTop = PreviousScrollTop;
				PreviousScrollTop--;
				}
			}

			function pauseDiv() {
			clearInterval(ScrollInterval);
			}

			function resumeDiv() {
					PreviousScrollTop = DivElmnt.scrollTop;
					ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
			}
			</script>
			<div id="MyDivName"  onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
				<p>Awesome taste, quantity and quality is very good. Good job and keep going and touch the sky of success. Thank you ziyfat.😊-<b>Muhammad Imran‎ </b></p>
				<p>Great Beef Yakhni Pulao ..Delicious Kheer😊😊😊.Thank you Ziyafat -‎<b>Danish Shiekh</b></p>
				<p>The food is so tasty and so delicious and plus the service is also very good. Best experience :)👌  -<b>Areeb Anjum</b></p>
				<p>amazing food 10/10 Biryaaani *** too good 😊 keep up the good work. Ma SHA ALLAH -<b>Jehad Ak</b></p>
				<p>asalamualaikum mashallah behtreen khana tha behtreen taste .always good quality 👌 thanks for the best food -<b>Bilal Khan</b></p>
				<p>lush haleen 😊.... thanks for the taste....... -<b>Muhammad Yasin</b></p>
				<p>Taha bhai boht khoob boht zyada tareef ki he family ne 👌 or boht maza aya beef me end krdya apne -<b>Fadi Mirza</b></p>
				<p>masha Allah great taste 👌 ... good work haris.. -<b>Rameez Zaheer</b></p></div></div>
	

		<div class="content" id="last" ><h4 >Join Us</h4>
		  <div id="fblink">
			<div class="fb-page" data-href="https://www.facebook.com/Zziyafat/?epa=SEARCH_BOX" data-tabs="timeline" data-width="270px" data-height="180px" data-small-header="false"   data-show-facepile="true"data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Zziyafat/?epa=SEARCH_BOX" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Zziyafat/?epa=SEARCH_BOX">Ziyafat</a></blockquote></div>
		 </div>	</div></div>



	<div id="downfooter" style="color: white; font-family:satisfy;font-size: 40px; text-align: center;line-height: -5px;">The name speak itself </div></footer>
</body>

</html>

