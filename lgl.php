<?php
$login=true;
include("on.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $login=false;

    $Username = $_POST['user'];

    $Password = $_POST['pass'];

    $sql = "SELECT * FROM ent WHERE Username='$Username' AND Password='$Password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1) {

     
        $login = true;
        
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Username'] = $Username;
        
        header("location: front1.html");
       }

        
       else {
        $error = "Your Login Name or Password is invalid";
     }
  }



?>



<!Doctype html>
<html lang="eng">
<head>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
 if($login == false){
     
  echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error!Wrong Username or Password</strong>
</div>';


   }   

?>
<form action="lgl.php" method="POST">
    <div id="login-box">
        <div class="left">
      
          <br>
          <br>
          <br>
          <br>
          <input type="text"  placeholder="Username" name="user"  />
          <input type="password"  placeholder="Password" name="pass"/>
        <a href="lgl.php" target="_self"> <input type="submit" name="login" value="Login"/></a>
        </div>
       
      </div>
</form>
</html>

