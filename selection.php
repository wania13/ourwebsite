<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<style>
body
    {
        margin:0;
        background:url("admin.png");
        background-repeat:no-repeat;
        background-size: cover; 
    }
.Header {
    z-index: 100;
    position: fixed;
    top: 0;
    width: 100%;
    background-color:rgba(135,150,200,0.8);
    height: 100px;
}
    
input.MyButton1,input.MyButton2{
position: absolute;
top:48%;
left:25%;    
width: 230px;
height: 100px;    
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: rgba(125,125,125,0.8);
color: #000;
border: 1px solid #aeaeae;
border-radius: 10px;
}
    
input.MyButton2
{
left:58%;    
}
    
    
input.MyButton1:hover,input.MyButton2:hover {
border: 1px solid #fff;
border-radius: 50px;    
}
}
</style>
</head>
<body >

<div class="Header" id="myHeader">
<p class = "headerLogo">
    <i><font size = "6" face = "verdana" color = "white"><center>Admin Block</center></font></i>
</p>
</div>

   <form>
       <a href="http://localhost/dash3.php"><input class="MyButton1" type="button" value="Manage Offers" /></a>
</form>
    
<form>
    <a href="http://localhost/manage.php"><input class="MyButton2" type="button" value="Manage Menu" onclick="'" /></a>
</form>
    
</body>
</html>