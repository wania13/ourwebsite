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
	top: 0;
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
#main{overflow: auto;padding-bottom:350px;}
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

#banner
{

	position: relative;
	height:auto;
	width:90vw;
	margin: auto;
	margin-top: 130px;
	margin-bottom: 50px;
}
#topic{
  margin-top:30px;
 font-size: 70px;
  color: #800000;
  text-align: center;
  font-family: satisfy;

}
#photos .img{
	margin:5px 5px;
	border:3px solid black;
}
#photos .img:hover{
	border:10px solid #800000 ; 

	z-index: 999999;
	position: relative;
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
	          </div>



   <div>

    	<!-- write your code here -->
    	<div id="banner" style="border:1px solid black; background-color: #E8E8E8;">
			
			<h1 id="topic">Gallery</h1>
			<h4 id="topic" style="font-size: 25px;">"Sharing the greatest moments with other is always the best thing<br>Find few of our captured moments while serving the happy stomachs and even happier hearts"</h1>
				<div id="photos" style="margin:45px 65px; display: flex;align-content: center;flex-wrap: wrap;">
			    <a href="aa.jpg" target="_blank"> <img class="img" src="aa.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="bb.jpg" target="_blank"> <img class="img" src="bb.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="cc.jpg" target="_blank"> <img class="img" src="cc.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="dd.jpg" target="_blank"> <img class="img" src="dd.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="ee.jpg" target="_blank"> <img class="img" src="ee.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="ff.jpg" target="_blank"> <img class="img" src="ff.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="gg.jpg" target="_blank"> <img class="img" src="gg.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="hh.jpg" target="_blank"> <img class="img" src="hh.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    
			    <a href="ii.jpg" target="_blank"> <img class="img" src="ii.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="jj.jpg" target="_blank"> <img class="img" src="jj.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    
			    <a href="l.jpg" target="_blank"> <img class="img" src="l.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="m.jpg" target="_blank"> <img class="img" src="m.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="n.jpg" target="_blank"> <img class="img" src="n.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="o.jpg" target="_blank"> <img class="img" src="o.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="p.jpg" target="_blank"> <img class="img" src="p.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
				
			    <a href="q.jpg" target="_blank" > <img class="img" src="q.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="pp.jpg" target="_blank" > <img class="img" src="pp.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="qq.jpg" target="_blank" > <img class="img" src="qq.jpg" width="170px" height="170px" alt="Picture of the owner"></a>

			    <a href="r.jpg" target="_blank" > <img class="img" src="r.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="s.jpg" target="_blank" > <img class="img" src="s.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="kk.jpg" target="_blank" > <img class="img" src="kk.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="t.jpg" target="_blank" > <img class="img" src="t.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="u.jpg" target="_blank" > <img class="img" src="u.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="v.jpg" target="_blank" > <img class="img" src="v.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="w.jpg" target="_blank" > <img class="img" src="w.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="x.jpg" target="_blank" > <img class="img" src="x.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="y.jpg" target="_blank" > <img class="img" src="y.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="z.jpg" target="_blank" > <img class="img" src="z.jpg" width="170px" height="170px" alt="Picture of the owner"></a>





			    <a href="a.jpg" target="_blank" > <img class="img" src="a.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="b.jpg" target="_blank" > <img class="img" src="b.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="c.jpg" target="_blank" > <img class="img" src="c.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="d.jpg" target="_blank" > <img class="img" src="d.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="e.jpg" target="_blank" > <img class="img" src="e.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="f.jpg" target="_blank" > <img class="img" src="f.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="g.jpg" target="_blank" > <img class="img" src="g.jpg" width="170px" height="170px" alt="Picture of the owner"></a>
			    <a href="h.jpg" target="_blank" > <img class="img" src="h.jpg" width="170px" height="170px" alt="Picture of the owner"></a>




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
				<p>Awesome taste, quantity and quality is very good. Good job and keep going and touch the sky of success. Thank you ziyfat.??-<b>Muhammad Imran? </b></p>
				<p>Great Beef Yakhni Pulao ..Delicious Kheer??????.Thank you Ziyafat -?<b>Danish Shiekh</b></p>
				<p>The food is so tasty and so delicious and plus the service is also very good. Best experience :)??  -<b>Areeb Anjum</b></p>
				<p>amazing food 10/10 Biryaaani *** too good ?? keep up the good work. Ma SHA ALLAH -<b>Jehad Ak</b></p>
				<p>asalamualaikum mashallah behtreen khana tha behtreen taste .always good quality ?? thanks for the best food -<b>Bilal Khan</b></p>
				<p>lush haleen ??.... thanks for the taste....... -<b>Muhammad Yasin</b></p>
				<p>Taha bhai boht khoob boht zyada tareef ki he family ne ?? or boht maza aya beef me end krdya apne -<b>Fadi Mirza</b></p>
				<p>masha Allah great taste ?? ... good work haris.. -<b>Rameez Zaheer</b></p></div></div>
	

		<div class="content" id="last" ><h4 >Join Us</h4>
		  <div id="fblink">
			<div class="fb-page" data-href="https://www.facebook.com/Zziyafat/?epa=SEARCH_BOX" data-tabs="timeline" data-width="270px" data-height="180px" data-small-header="false"   data-show-facepile="true"data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Zziyafat/?epa=SEARCH_BOX" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Zziyafat/?epa=SEARCH_BOX">Ziyafat</a></blockquote></div>
		 </div>	</div></div>



	<div id="downfooter" style="color: white; font-family:satisfy;font-size: 40px; text-align: center;line-height: -5px;">The name speak itself </div></footer>
</body>

</html>


