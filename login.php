
<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['admin_username']) || empty($_POST['admin_password'])){
 $error = "Usename or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['admin_username'];
 $pass=$_POST['admin_password'];
     
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($conn, "ziyafat");     

 //sql query to fetch information of registerd user and finds user match.
 $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_password='$pass' AND admin_username='$user'");
 
 $rows = mysqli_num_rows($result);
 if($rows){
     $error="validated";// Redirecting to other page
     header("location:selection.php");
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
?>

<Doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
    
<style>
    
    
.login{    
width: 500px;
height: 300px;
text-align: center;
margin: 0 auto;
background-color: rgba(160, 150, 80,0.7);
margin-top: 160px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
    
input[type=text], input[type=password]{
width:56%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
    
input[type=submit]{
width:200px;
height:50px;    
background-color:#d63;
color:#fff;
border:2px solid #d63;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
    
</style>
</head>
    
    
<body style="background:url(login.jpg);background-repeat:round">
<div class="login">
<h1 align="center;font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="admin_username" name="admin_username"><br/><br/>
<input type="password" placeholder="Password" id="admin_password" name="admin_password"><br/><br/>
<input type="submit" value="Login" name="submit" onclick="http://localhost/selection.php">
 <span><br/><?php echo $error ?></span>    
</form>
</div>    
</body>
</html>
    


