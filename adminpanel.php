<?php
include_once('connection.php');
$tbl_name = "changeresume";
$tbl_skill = "skills";
$tbl_language="lanquage";
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
  $adminname =$_POST["adminname"];
  $adminjob =$_POST["adminjob"];
  $adminemail =$_POST["adminemail"];
  $adminphone =$_POST["adminphone"];
  $skill1 =$_POST["skill1"];
  $skill2 =$_POST["skill2"];
  $skill3 =$_POST["skill3"];
  $skill4 =$_POST["skill4"];
  $skill1_percentage =$_POST["skill_1_result"];
  $skill2_percentage =$_POST["skill_2_result"];
  $skill3_percentage =$_POST["skill_3_result"];
  $skill4_percentage =$_POST["skill_4_result"];
  $language1=$_POST["language1"];
  $language1_percent=$_POST["language1_result"];
  $language2=$_POST["language2"];
  $language2_percent=$_POST["language2_result"];
}

$sql = "UPDATE $tbl_name SET adminname='$adminname',adminjob='$adminjob',adminemale='$adminemail',aminphone='$adminphone' where id=1";
$sql_skill = "UPDATE $tbl_skill SET skill1='$skill1',skill2='$skill2',skill3='$skill3',skill4='$skill4',skill_1_result='$skill1_percentage',skill_2_result='$skill2_percentage',skill_3_result='$skill3_percentage',skill_4_result='$skill4_percentage' where id=1";
$sql_language = "UPDATE $tbl_language SET language1='$language1',language1_percent='$language1_percent',language2='$language2',language2_percent='$language2_percent' where id=1";
if (mysqli_query($conn, $sql)) {
  echo "admin data updated successfully";
} else {
  echo "Error updating admin data: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql_skill)) {
  echo "skill data updated successfully";
} else {
  echo "Error updating skill data: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql_language)) {
  echo "language data updated successfully";
} else {
  echo "Error updating language data: " . mysqli_error($conn);
}

mysqli_close($conn);

?>