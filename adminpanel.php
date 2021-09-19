<?php
include_once('connection.php');
$tbl_name = "changeresume";
$tbl_skill = "skills";
$tbl_language="lanquage";
$tbl_avatar="avatar";
$tbl_education="education";
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
  $education_topic_1=$_POST["topic_1"];
  $education_date_start_1=$_POST["date_start_1"];
  $education_date_finished_1=$_POST["date_finished_1"];
  $education_place_1=$_POST["place_1"];
  $education_topic_2=$_POST["topic_2"];
  $education_date_start_2=$_POST["date_start_2"];
  $education_date_finished_2=$_POST["date_finished_2"];
  $education_place_2=$_POST["place_2"];

  if(isset($_FILES['fileToUpload'])){
    $errors= array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_tmp =$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 5097152){
       $errors[]='File size must be excately 5 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"uploads/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }
}

$sql = "UPDATE $tbl_name SET adminname='$adminname',adminjob='$adminjob',adminemale='$adminemail',aminphone='$adminphone' where id=1";
$sql_skill = "UPDATE $tbl_skill SET skill1='$skill1',skill2='$skill2',skill3='$skill3',skill4='$skill4',skill_1_result='$skill1_percentage',skill_2_result='$skill2_percentage',skill_3_result='$skill3_percentage',skill_4_result='$skill4_percentage' where id=1";
$sql_language = "UPDATE $tbl_language SET language1='$language1',language1_percent='$language1_percent',language2='$language2',language2_percent='$language2_percent' where id=1";
$sql_avatar = "UPDATE $tbl_avatar SET filepath='uploads/$file_name' where id=1";
$sql_education="UPDATE $tbl_education SET topic_1='$education_topic_1',date_start_1='$education_date_start_1',data_finished_1='$education_date_finished_1',place_1='$education_place_1',
topic_2='$education_topic_2',date_start_2='$education_date_start_2',data_finished_2='$education_date_finished_2',place_2='$education_place_2' where id=1";
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
if (mysqli_query($conn, $sql_avatar)) {
  echo "avatar data updated successfully";
  } else {
  echo "Error updating avatar data: " . mysqli_error($conn);
  }
if (mysqli_query($conn, $sql_education)) {
  echo "education data updated successfully";
    } else {
  echo "Error updating education data: " . mysqli_error($conn);
    }

  mysqli_close($conn);
  
?>