<?php
include_once('connection.php');
$tbl_name = "changeresume";
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
  $adminname =$_POST["adminname"];
  $adminjob =$_POST["adminjob"];
  $adminemail =$_POST["adminemail"];
  $adminphone =$_POST["adminphone"];
}

$sql = "UPDATE $tbl_name SET adminname='$adminname',adminjob='$adminjob',adminemale='$adminemail',aminphone='$adminphone' where id=1";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>