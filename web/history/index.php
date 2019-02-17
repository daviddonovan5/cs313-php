

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ward History</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">



</head>

<body>

<div id="heading">
  <CENTER> <img id="Annual Hisotry" src="annual-history.jpg" alt="Annual Hisotry" width="650" height="242">
  <p id="title">Mather Ward</p> </CENTER>

</div>

<div class="main">
  <CENTER>
    
    <h4>Enter Information For a New Event</h4><hr/>

    <form action="" method="POST">

      <span class="prompt"> Enter your first name </span><br>
      <input type="text" name="fname"><br>
      <span class="prompt"> Enter your last name </span><br>
      <input type="text" name="lname"><br>
      <span class="prompt"> Enter your email </span><br>
      <input type="text" name="email"><br>
      <span class="prompt"> Select the orginization </span><br>
      <select name="org">
      <option value=1>Bishopric</option>
      <option value=3>Elders Quorum</option>
      <option value=6>Primary</option>
      <option value=2>Relief Society</option>
      <option value=8>Sunday School</option>
      <option value=9>Ward Activities</option>
      <option value=7>Ward Missionary</option>
      <option value=4>Young Men</option>
      <option value=5>Young Women</option>
      </select><br>
      <span class="prompt"> Enter the Date of the activity (yyyy-mo-dd)</span><br>
      <input type="date" name="date"><br>
      <span class="prompt"> Enter the Name of the activity </span><br>
      <input type="text" name="activity_name">
      <p class="prompt"> Enter a description of the activity </p>
      <textarea rows="4" cols="50" name="description"></textarea><br>
      
      
     
     
      
<input type="submit" value="Save" name="Save" class="navagation" />
</form>
<form action="results.php">
<input type="submit" value="See Results" name="results" class="navagation" />
</form>

<?php

// Required field names
$required = array('fname', 'lname', 'email', 'org', 'date', 'activity_name', 'description');

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

if ($error) {
  echo "All fields are required.";
} else {
  
  // get the data from the POST
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$organization_id = $_POST['org'];
$act_date = $_POST['date'];
$title = $_POST['activity_name'];
$description = $_POST['description'];
$email = $_POST['email'];
$updated = date('Y-m-d');
$user = 1;


include "db_connect.php";


try
{
  
  
  $statement = $db->prepare('INSERT INTO users(organization_id, email, first_name, last_name) VALUES(:organization_id, :email, :first_name, :last_name)');
  
  $statement->bindValue(':organization_id', $organization_id);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':first_name', $first_name);
  $statement->bindValue(':last_name', $last_name) ;
  $statement->execute();


 $statement = $db->prepare('INSERT INTO event(user_id, updated, act_date, title, description, organizaiton_id) VALUES(:user, :updated, :act_date, :title, :description, :organization_id)'); 
  
  
  $statement->bindValue(':act_date', $act_date);
  $statement->bindValue(':title', $title);
  $statement->bindValue(':description', $description);
  $statement->bindValue(':organization_id', $organization_id) ;
  $statement->bindValue(':user', $user) ;
  $statement->bindValue(':updated', $updated) ;
  
    $statement->execute();

  echo "Thank you " .$first_name . " for submitting the event called \"" . $title . "\"";
  
  
}
catch (Exception $ex)
{
 echo("Something went Wrong Please try again");
 die();
}

//}
}



?>



</html>
</body>