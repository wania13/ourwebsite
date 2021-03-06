<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link  href="‪C:\contactnew.html">
  	<link  href="‪C:\aboutusnew.html">
	<title>Responsive Menu</title>

 <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
 	*
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

html,body {height: 100%;}
#container{min-height: 100%;}
#main{overflow: auto;padding-bottom: 200px;}
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

#topic{
  margin-top:90px;
  margin-left:30px;
  color: #800000;
  text-align: center;
  font-family: satisfy;
margin-top: 120px;
}

 
   
    .flip-card1
{
  border-color: goldenrod;
  width: 350px;
  height: 300px;
  position: relative;
  left: 50px;
  top: 50px;
  perspective: 1000px;
  display: inline-block;
}
    
.flip-card2
{
  border-color: goldenrod;
  width: 350px;
  height: 300px;
  position:  relative;
  left: 130px;
  top: 50px;
  perspective: 1000px;
  display:inline-block;
}
 
.flip-card3
{
  border-color: goldenrod;
  width: 350px;
  height: 300px;
  position: relative;
  left: 230px;
  top: 50px;
  perspective: 1000px;
  display: inline-block;
}
 
.flip-card4
{
  border-color: goldenrod;
  width: 350px;
  height: 300px;
  position: relative;
  left: 50px;
  top: 50px;
  perspective: 1000px;
  display:inline-block;
}
    
.flip-card5
{
  border-color: goldenrod;
  width: 350px;
  height: 300px;
  position: relative;
  left: 130px;
  top: 50px;
  perspective: 1000px;
  display:inline-block;
}
    
.flip-card6
{
  border-color: goldenrod;
  width: 350px;
  height: 300px;
  position: relative;
  left: 230px;
  top: 50px;
  perspective: 1000px;
  display:inline-block;
}  
    
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 1s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card1:hover .flip-card-inner,.flip-card2:hover .flip-card-inner,.flip-card3:hover .flip-card-inner,.flip-card4:hover .flip-card-inner,.flip-card5:hover .flip-card-inner,.flip-card6:hover .flip-card-inner{
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back1, .flip-card-back2,.flip-card-back3,.flip-card-back4,.flip-card-back5,.flip-card-back6 {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back1,.flip-card-back2,.flip-card-back3,.flip-card-back4,.flip-card-back5,.flip-card-back6 {
  color: white;
  transform: rotateY(180deg);
}
    .img
    {
        width:350px;
        height:300px;
    }

@media screen and (max-width:540px)
{
  .flip-card1,.flip-card2,.flip-card3,.flip-card4,.flip-card5,.flip-card6
    {
        left: 20%;
    }
}

@media screen and (max-width:400px)
{


}
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
		             </label>
	       </div>
	
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



    <div id="main">
      
          <divs>
 <h1 id="topic">Oh Yes! We are the Ultimate Solution :) </h1>   
<div class="flip-card1">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img" src="wedding.jpg" alt="Picture of the owner">
    </div>
    <div class="flip-card-back1" Style="background-color:#ff0f0f">
      <h1>Weddings</h1>
    </div>
  </div>
</div>
    
    
<div class="flip-card2" >
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img" src="valima.jpg" alt="Picture of the owner">
    </div>
    <div class="flip-card-back2" style="background-color:lightblue">
      <h1>Valimas</h1>
    </div>
  </div>
</div>
   
         
<div class="flip-card3">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img" src="birthday.jpg" alt="Picture of the owner"/>
    </div>
    <div class="flip-card-back3" style="background-color:hotpink">
      <h1>Birthdays</h1>
    </div>
  </div>
</div> 

    <br/>
    
<div class="flip-card4" style="padding-top: 30px">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img" src="mehendi.jpg" alt="Picture of the owner">
    </div>
    <div class="flip-card-back4" style="background-color:orangered">
      <h1>Mehendi</h1>
    </div>
  </div>
</div> 
 
  <div class="flip-card5" style="padding-top: 30px">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img" src="socialevents.jpg" alt="Picture of the owner">
    </div>
    <div class="flip-card-back5" style="background-color:lightsalmon">
      <h1>Social Events</h1>
    </div>
  </div>
</div> 
    
    <div class="flip-card6" style="padding-top: 30px">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img" src="bussiness.jpg" alt="Picture of the owner">
    </div>
    <div class="flip-card-back6" style="background-color:darkslateblue">
      <h1>Bussiness Meetings</h1>
    </div>
  </div>
</div> 
</div> 









    </div>











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



</body>

</html>