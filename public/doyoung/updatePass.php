<?php
require "conn.php";
if($_POST["EmailAddress"]!=""){
$EmailAddress=$_POST["EmailAddress"];
$HPassword=$_POST["HPassword"];
$mysql_qry ="update User set HPassword='$HPassword' where EmailAddress = '$EmailAddress'";
$result = mysqli_query($conn, $mysql_qry);
echo "result=".$result;
if($result){
   echo mysqli_affected_rows($result);
}
else{
   echo mysqli_affected_rows($result);
    }
}

mysqli_close($conn);
?>
<?php

$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

if (!$android){
?>

<html>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="POST">
         Email: <input type = "text" name = "EmailAddress" />
              a_password: <input type = "text" name="HPassword" />
         <input type = "submit" />
      </form>
   
   </body>
</html>
<?php
}
?>
