


<DOCTYPE htlm>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet"> 
	 <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet"> 

<style type="text/css">*
{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}
body{background-color: black;}
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
	margin-right: 13%;
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
		height:70%;
		top:8%;

	}
	.togglearea
	{	
		display: flex;
	}
	#last{display: none;}




}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container,.slideshow-container1 {
  /*max-width: 1000px;*/
  width:100%;
  height: 640px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  padding: 8px 12px;
  position: absolute;
  top: 40%;
  width: 100%;
  text-align: center;
  font-size: 70px;
  color: white;
  font-family:serif;
    
}

/* Number text (1/4 etc) */
.numbertext,.numbertext1 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot,.dot1 {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
} 
    
 .dcard { 
  background-color:#F98D4B;
  position: relative;
  height:250px;
  padding-bottom: 50px;
}  

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
<body onLoad="scrollDiv_init()" style="background-color:lightgray">

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
		          <img  id="logo" src="logofinal.jpg" width="6%" height="95%" />
		          
		              <a href="http://localhost/home2.php">Home</a>
                      <a href="http://localhost/aboutusnew.php">About Us</a>
		              <a href="‪http://localhost/menu.php">menu</a>
		              <a href="http://localhost/servicesnew.php">services</a>
		              <a href="http://localhost/testing.php">Gallery</a>
		              <a href="http://localhost/contactnew.php">Contact Us</a>
                   	 <a  id="dashboard" href="http://localhost/login.php">login</a>
                 
	          </div>
     

<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
   <img src="candle.jpg" style='width:100%;height:640px'>
  <div class="text" style="font-size: 70px;font-weight: bold;  top: 30%;right: 23%;">Welcome to Ziyafat</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="wedding.jpg" style="width:100%;height:640px">
  <div class="text" style="color: white;font-weight: bold;top: 70%;">We Arrange</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="pic3.jpg" style="width:100%;height:640px">
  <div class="text" style="font-weight: bold; top: 65%;right: 30%;">Everything</div>
</div>
    
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="happy.jpg" style="width:100%;height:640px">
  <div class="text"style="font-weight: bold;top: 49%;">For You</div>
  ?>
</div>
 
 <div style="text-align:center; position :absolute; top:90%; left:50%;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span></div>

</div>


<div id="aboutlink" style="width: 100%;height: 230px;background-color: black;text-align: center;">
	<h2 style="color: white;font-family: acme;text-align: center;letter-spacing: 5px;word-spacing:7px;padding: 35px;padding-top: 50px;">WE BELIEVE IN THESE WORDS</h2>
    <p style="color:lightgrey;font-size: 20px;"> "Customers will never love a company until the employees love it first."
-- Simon Sinek</p>
    <button style="background-color: #F98D4B;height: 30px;width: 250px;margin-top: 20px;border-radius: 10%;"><a href="http://localhost/aboutusnew.php" style="text-decoration: none;color: brown;font-size: 20px;font-weight: bold;">ABOUT US</a></button>
</div>

<div id="menulink" style="display: flex;">

   <div id="menulink1" style="width: 50%;height: 500px;background-color: brown;text-align: center;background-image: url(buffet.jpg);" >
	   <button style="background-color:darksalmon;height: 200px;width: 270px;margin-top: 130px;border-radius: 10%;"><a href="http://localhost/menu.php" style="text-decoration: none;color: #5e220a;font-size: 22px;font-weight: bolder;">VISIT OUR MENU FOR MORE INFORMATION</a></button>	
     </div>
    
  
    
    
<div div id="menulink2" style="width: 50%;height: 500px;background-color: brown;text-align: center;" >

<div class="slideshow-container1" style="width:100%">
<div class="mySlides1">
  <div class="numbertext1">1 / 4</div>
  <img src="offer1.jpeg" style='width:100%;height: 500px'>
</div>

<div class="mySlides1">
  <div class="numbertext1">2 / 4</div>
  <img src="offer3.jpeg" style="width:100%;height: 500px">
</div>

<div class="mySlides1">
  <div class="numbertext1">3 / 4</div>
  <img src="offer5.jpeg" style="width:100%;height: 500px">
</div>
    
<div class="mySlides1">
  <div class="numbertext1">4 / 4</div>
  <img src="offer6.jpeg" style="width:100%;height: 500px"> 
</div>
 
 <div style="text-align:center; position :relative">
  <span class="dot1"></span> 
  <span class="dot1"></span> 
  <span class="dot1"></span>
  <span class="dot1"></span>
  </div>
  </div>
</div>
</div> 
    
    



<div  style="background-color:black;height: 320px;bottom:350px">
    <h4 style="text-align: center;font-family: serif;position:relative;top:10px;color:#F98D4B;">Your Memories we Helped to Make</h4>
    <img src="mehendi.jpg" alt="Avatar" style=" position: relative;left: 100px;top:50px;width:250px;height:200px">
    <img src="wedding.jpg" alt="Avatar" style=" position: relative;left: 150px;top:50px; width:250px;height:200px">
    <img src="valima.jpg" alt="Avatar" style=" position: relative;left: 200px;top:50px;width:250px;height:200px">
    <img src="socialevents.jpg" alt="Avatar" style=" position:relative;left:250;top:50px; 170px; width:250px;height:200px">
    <h4 style="color:#F98D4B;float:right;position: relative;top:230px;"><a style="text-decoration: none;color: orange;"href="http://localhost/servicesnew.php">See more</a></h4>
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
		              <a href="http://localhost/home2.php">Home</a>
                      <a href="http://localhost/aboutusnew.php">About Us</a>
		              <a href="‪http://localhost/menu.php">menu</a>
		              <a href="http://localhost/servicesnew.php">services</a>
		              <a href="http://localhost/testing.php">Gallery</a>
		              <a href="http://localhost/contactnew.php">Contact Us</a></div>
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
     </div> </div></div>



  <div id="downfooter" style="color: white; font-family:satisfy;font-size: 40px; text-align: center;line-height: -5px;">The name speak itself </div></footer>


			<script language="javascript">
                
    var slideIndex = 0;
    var slide = 0;
showSlides();
showSlides1();                
                

function showSlides() {

  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
                
function showSlides1() {

  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slide++;
  if (slide > slides.length) {slide = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slide-1].style.display = "block";  
  dots[slide-1].className += " active";
  setTimeout(showSlides1, 2000); // Change image every 2 seconds
}
                
                
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
</body>

</html>

