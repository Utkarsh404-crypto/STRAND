<?php

include("on.php");
$showrerror = false;
if(isset($_POST['submit'])){

    $Username = $_POST['user'];
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    $Retypepassword = $_POST['pass1'];


     $samesql = "SELECT * FROM ent WHERE Username = '$Username'";


    $result = mysqli_query($conn , $samesql);

    $roww  =  mysqli_num_rows($result);
    
    if($roww >0){
     
    $showrerror = true;    
    

    }

else{
    if($Password == $Retypepassword){

       
        $insertquery = "insert into ent(Username,Email,Password,Retypepassword) values('$Username','$Email','$Password','$Retypepassword') ";

        $res= mysqli_query($conn,$insertquery);
     
        if($res){
     
         ?>
         <script>
             alert('Signed Up Successfully');  
         </script>
         <?php
     
        }   

    }
   
   else{
       ?>
       <script>
           alert('Password Not Matched');
           </script>
           <?php
   }
}

}


?>






<!Doctype html>
<html lang="eng">
<head>

    <link rel="stylesheet" href="styles.css">


</head>
<?php


if($showrerror){

    ?>
<script> alert('Username Already Exists,Try Again') </script>

<?php
}


?>
<form action="" method="POST">
    <div id="login-box">
        <div class="left">
      
          <br>
         
          <input type="text"  placeholder="Username" name="user"  />
          <input type="text"  placeholder="E-mail" name="email"/>
          <input type="password"  placeholder="Password" name="pass"/>
          <input type="password"  placeholder="Retype password" name="pass1"/>
          
          <a href="Login.php" target="_self"> <input type="submit" name="submit" value="Sign in"/></a>
        </div>
        
        <div class="right">
          <span class="loginwith">Sign in with<br />social network</span>
          
          <button class="social-signin facebook">Log in with facebook</button>
          <button class="social-signin twitter">Log in with Twitter</button>
          <button class="social-signin google">Log in with Google+</button>
        </div>
       
      </div>
</form>
</html>

