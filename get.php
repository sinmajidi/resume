<?php
include_once('connection.php');
$tbl_name = "changeresume";
$tbl_skill = "skills";
$tbl_language = "lanquage";
$tbl_avatar="avatar";
$tbl_education="education";

$sql = "SELECT * FROM $tbl_name";
$sql_skill = "SELECT * FROM $tbl_skill";
$sql_language = "SELECT * FROM $tbl_language";
$sql_avatar = "SELECT * FROM $tbl_avatar";
$sql_education = "SELECT * FROM $tbl_education";


            


?>
<!DOCTYPE html>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php
          $result = mysqli_query($conn, $sql_avatar);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["filepath"];
                }
               } else {
              echo "0 results";
            }
            ?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <?php
          $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  "<h2 style='background-color: rgb(255, 255, 255,0.5);border-radius: 100px;'>".$row["adminname"]."</h2>";
                }
               } else {
              echo "0 results";
            }
            ?>
          </div>
        </div>
        <div class="w3-container">
          <p>
            <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php
          $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["adminjob"];
                }
               } else {
              echo "0 results";
            }
            ?>
            </p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Tehran, IR</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php
          $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["adminemale"];
                }
               } else {
              echo "0 results";
            }
            ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php
          $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["aminphone"];
                }
               } else {
              echo "0 results";
            }
            ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["skill1"];
                }
               } else {
              echo "0 results";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
           
            <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  " <div class='w3-container w3-center w3-round-xlarge w3-teal' style='width:".$row['skill_1_result']."'>".$row['skill_1_result']."</div>";

                }
               } else {
              echo "0 results";
            }
            ?>
          </div>
          <p>
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["skill2"];
                }
               } else {
              echo "0 results";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  " <div class='w3-container w3-center w3-round-xlarge w3-teal' style='width:".$row['skill_2_result']."'>".$row['skill_2_result']."</div>";

            }
            } else {
              echo "0 results";
            }
            ?>
        
    
           
          </div>
          <p>
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["skill3"];
                }
               } else {
              echo "0 results";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  " <div class='w3-container w3-center w3-round-xlarge w3-teal' style='width:".$row['skill_3_result']."'>".$row['skill_3_result']."</div>";

            }
            } else {
              echo "0 results";
            }
            ?>
          </div>
          <p>
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row["skill4"];
                }
               } else {
              echo "0 results";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <?php
          $result = mysqli_query($conn, $sql_skill);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  " <div class='w3-container w3-center w3-round-xlarge w3-teal' style='width:".$row['skill_4_result']."'>".$row['skill_4_result']."</div>";

            }
            } else {
              echo "0 results";
            }
            ?>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>
          <?php
          $result = mysqli_query($conn, $sql_language);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['language1'];

            }
            } else {
              echo "0 results";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge">
          <?php
          $result = mysqli_query($conn, $sql_language);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  " <div class='w3-round-xlarge w3-teal w3-center' style='height:24px;width:".$row['language1_percent']."'>".$row['language1_percent']."</div>";

            }
            } else {
              echo "0 results";
            }
            ?>
        
          </div>
          <p><?php
          $result = mysqli_query($conn, $sql_language);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['language2'];

            }
            } else {
              echo "0 results";
            }
            ?></p>
          <div class="w3-light-grey w3-round-xlarge">
          <?php
          $result = mysqli_query($conn, $sql_language);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  " <div class='w3-round-xlarge w3-teal w3-center' style='height:24px;width:".$row['language2_percent']."'>".$row['language2_percent']."</div>";

            }
            } else {
              echo "0 results";
            }
            ?>
          </div>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Psychologist at Asadabadi Speech Therapy Center</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>March 2021 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>i'm working at the mentioned center as Child psychologist and counselor on speech therapy and schema therapy.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Executive Director at Parvaresh ZehnRoshan Publications</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>july 2020 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>In these publications, we publish books on the subject of children's group education and student counseling.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>CEO of Parvaresh ZehnRoshan Institute</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2018 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>In this institute, classes are held on the subject of rubik's cube, abacus, robotics, etc., and also in this place, children's educators are trained. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php
          $result = mysqli_query($conn, $sql_education);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['place_1'];

            }
            } else {
              echo "0 results";
            }
            ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
          $result = mysqli_query($conn, $sql_education);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['date_start_1']."-".$row['data_finished_1'];

            }
            } else {
              echo "0 results";
            }
            ?></h6>
          <p><?php
          $result = mysqli_query($conn, $sql_education);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['topic_1'];

            }
            } else {
              echo "0 results";
            }
            ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php
          $result = mysqli_query($conn, $sql_education);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['place_2'];

            }
            } else {
              echo "0 results";
            }
            ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php
          $result = mysqli_query($conn, $sql_education);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['date_start_2']."-".$row['data_finished_2'];

            }
            } else {
              echo "0 results";
            }
            ?></h6>
          <p><?php
          $result = mysqli_query($conn, $sql_education);

            if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
              echo  $row['topic_2'];

            }
            } else {
              echo "0 results";
            }
            ?></p>
          <hr>
        </div>
       
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by Sina Majidi</p>
</footer>

</body>
</html>
