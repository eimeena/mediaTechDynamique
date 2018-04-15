<?php
session_start();
if(isset($_POST['submit']))
{
$bd=mysqli_connect('localhost','root','wati-b2013','mediaTechDynamique');
$name=($_POST['Name']);
$username=($_POST['username']);
$email=($_POST['email']);
$password=($_POST['password']);
$sql="INSERT INTO inscription(Name,username,email,password) VALUES('$name','$username','$email','$password')";
mysqli_query($db, $sql);
header('location:video.php');
if (!empty($_POST['Name']) AND !empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password']))
{
  $name=htmlentities($_POST['Name']);
$username=htmlentities($_POST['username']);
$email=htmlentities($_POST['email']);
$password=sha1($_POST['password']);



}

else

{
  $erreur="Tous les champs doivent etre remplis !";
}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<?php
include 'partials/_header.php';
?>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container" style="margin-top:100px;">
     <form action="inscription.php" class="form-horizontal" style="width:100%" method="post" >
     	<h1 style="color: #1a0000"><center>SIGN UP FOR VIEWING OURS VIDEOS</center></h1>

     <fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="Name"><span style="color: white">Name</span></label>  
  <div class="col-lg-4">
  <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-lg">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="username"><span style="color: white">User Name</span></label>  
  <div class="col-lg-4">
  <input id="username" name="username" type="text" placeholder="User Name" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="password"><span style="color: white">Password</span></label>
  <div class="col-lg-4">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="password4"><span style="color: white">Repeat Password</span></label>
  <div class="col-lg-4">
    <input id="password4" name="password4" type="password" placeholder="Repeat Password" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="emailaddr"><span style="color: white">Email</span></label>  
  <div class="col-lg-4">
  <input id="emailaddr" name="email" type="text" placeholder="Email" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-lg-4 control-label" for="submit"></label>
  <div class="col-lg-4">
    <button id="submit" name="submit" class="btn btn-primary btn-lg"><span style="color: white">Submit</span></button>
    
  </div>
</div>

</fieldset>
</form>
<?php 
if(isset($erreur))
{
  echo '<font color="red">'.$erreur."</font>";
}

 ?>
<div class="container">
	<div class="row">
	</div>
</div>
       </div>
       
 <?php 
      include 'partials/_footer.php';
      ?>

</body>
</html>