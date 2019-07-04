<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>Responsive Menu</title>
	<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Gochi+Hand&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <style type="text/css">
 	
#topic{
  margin-top:20px;
  margin-left:30px;
  margin-bottom: 20px;
  color: #800000
}

#topic2{
  margin-top:90px;
  margin-left:500px;
  font-size: 70px;
  color: #800000;
  font-family: satisfy;
}

 .para
{
    background-color: rgb(255, 153, 102);
    width:90%;
    height: 400px;
    position: relative;
    left:6% ;
    font-size:20px;
    font-family:serif;
    padding: 30px;
    color:black;
   overflow: scroll;
    box-shadow: 10px 10px 5px #888888;
    top:59px;
    border-radius: 25px;


 }



    
.flip-card1
{
  border-color: goldenrod;
  width: 250px;
  height: 250px;
  position: relative;
  left: 8%;
  top: 95%;
  perspective: 1000px;
    display: inline-block;
}
    
.flip-card2
{
  border-color: goldenrod;
  width: 250px;
  height: 250px;
  position: relative;
  left:130px;
  top: 95%;
  perspective: 1000px;
  display:inline-block;
}
 
.flip-card3
{
  border-color: goldenrod;
  width: 250px;
  height: 250px;
  position: relative;
  left: 155px;
  top: 95%;
  perspective: 1000px;
  display: inline-block;
}
 
.flip-card4
{
  border-color: goldenrod;
  width: 250px;
  height: 250px;
  position: relative;
  left: 190px;
  top: 95%;
  perspective: 1000px;
  display: inline-block;
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

.flip-card1:hover .flip-card-inner,.flip-card2:hover .flip-card-inner,.flip-card3:hover .flip-card-inner,.flip-card4:hover .flip-card-inner{
  transform: rotateX(180deg);
}

.flip-card-front, .flip-card-back1, .flip-card-back2,.flip-card-back3,.flip-card-back4 {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;

}

.flip-card-back1,.flip-card-back2,.flip-card-back3,.flip-card-back4 {
  color: white;
  transform: rotateX(180deg);
}


.special{
  color: #990000;
  font-size:25px;
  display: inline-block;
}

#mainflip{
 
  margin-top:100px;

}
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

#banner
{
	position: relative;
	height:90vh;
	width:100vw;
	background-color: grey;
}

#design{
	display: inline;
}
#para2{
	float:left;
	color:rgb(242, 38, 7);
	font-family: sans-serif;
	font-size:350%;
	
	
	margin-top: 2%;
	margin-left:35%;
	font-weight: bold;

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
#main{overflow: auto;padding-bottom: 70px;}
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



@media screen and (max-width:540px)
{
      .flip-card1,.flip-card2,.flip-card3,.flip-card4,.flip-card5,.flip-card6
    {
        left: 23%;
    }
}

@media screen and (max-width:400px)
{


}

 </style>
</head>
<body onLoad="scrollDiv_init()" style="background-color: lightgray">


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


	<div id="banner">
			<img src="99a.jpg" width="100%" height="100%">
		</div>


<div id="design">

		<div id="para2"><B>ABOUT   US</B></div>
	<div class="para">
  <h1 id="topic">Our Story</h1>
    <p style="  font-family:satisfy;font-size: 30px;" >In today’s culinary world, cooking is not only an art, infact it has become a science as well. It is important for the chef now a days to have an understanding of the chemical, biological and physical processes of cooking. Simultaneously knowledge of different cuisine, practical techniques, methods of cooking and combination of both traditional and modern techniques are essential; if you want to impress and satisfy our valued clients.<br/><br/>Coming from a background where academic failure meant to be lifelong failure, I had no option except to obey my parents and complete my education, therefore I completed Masters Degree in Business Administration likewise my brother is also a Chartered Accountant. The Motivation behind us in indulging in the food business was our father who is an entrepreneur and has been involved in successfully in the event management Profession since 20 years or so.<br/><br/>Alhamdulillah Ziyafat (The Culinary) is emerging in the catering business competitive world as one of the prominent catering providers. It is different among others in the town since we have high quality Chefs who are thorough professionals with comprehensive experience of Arabic, Continental & Chinese cuisines.</p>
</div> 


	<div style="width: 90%; margin:70px; margin-top: 150px; ">
<p style="display: inline;font-family:satisfy; font-size: 10px;"><span class="special"><b>"Our manifesto is to provide Superior Quality Hygienic food with extra emphasis on fair & factual quantity provision in terms of material & weight undeceptively. We always strive to serve with excellence in Wedding ceremonies, Business Sessions, Corporate Events, and other societal gatherings to make your events Exquisite and Memorable."</b></span></p>	
	</div>  
	
</div>

<div id="mainflip">
  <h1 id="topic2">Our Team</h1>
<div class="flip-card1">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="Hasham Khalid.jpeg" alt="Picture of the owner"  style="width:250px;height:250px;">
    </div>
    <div class="flip-card-back1" Style="background-color:#236A8D">
      <h2>Hasham Khalid</h2>
      <h3>Chief Executive</h3>
    </div>
  </div>
</div>
    
    
<div class="flip-card2" >
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="Haris Khalid.jpeg" alt="Picture of the owner"  style="width:250px;height:250px;">
    </div>
    <div class="flip-card-back2" style="background-color:#406f2f">
      <h2>Haris Khalid</h2>
      <h3>Sales Executive<br/>Marketing Executive</h3>
    </div>
  </div>
</div>
   
   <div class="flip-card3">
  <div class="flip-card-inner">
    <div class="flip-card-front">
   <img src="Waqas Adnan.jpeg"style="width:250px;height:250px;">
    </div>
    <div class="flip-card-back3" alt="Picture of the owner" style="background-color:#4f0f2f">
      <h2>Waqas Adnan</h2>
      <h3>Chief Operating officer</h3>
    </div>
  </div>
</div> 
         


    
<div class="flip-card4">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="Taha Adnan.jpeg" alt="Picture of the owner" style="width:250px;height:250px;">
    </div>
    <div class="flip-card-back4" style="background-color:#5f8ff8">
      <h2>Taha Adnan</h2>
      <h3>General Manager Operations</h3>
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
		              <a href="http://localhost/contactnew.php">Contact Us</a>></div>
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



  <div id="downfooter" style="color: white; font-family:satisfy;font-size: 40px; text-align: center;line-height: -5px;">The name speak itself </div></footer>s



</body>

</html>