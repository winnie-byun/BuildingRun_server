<?php
require "conn.php";
if($_POST["EmailAddress"]!=""){
$user_email=$_POST["EmailAddress"];
$user_pass=$_POST["HPassword"];
$mysql_qry ="update User set HPassword='$user_pass' where EmailAddress = '$user_email'";
$result = mysqli_query($conn, $mysql_qry);
$affected = mysql_affected_rows();
if($affected > 0)
   echo "row was updated/inserted";
else
   echo "No rows were ....";

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
