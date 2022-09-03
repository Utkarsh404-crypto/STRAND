<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifi";

$conn  = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connected";

?>
<!--  <script>
    alert('Connection Successful');
</script>
 -->
<?php
}
else {

    echo "Connection Failed".mysqli_connect_error();
}

?>
