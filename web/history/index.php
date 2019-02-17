

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
$date = $_POST['date'];
$activity_name = $_POST['activity_name'];
$description = $_POST['description'];
$email = $_POST['email'];

echo "Thank you " .$fname . " for submitting the event called \"" . $activity_name . "\"";

require("db_connect.php");
$db = get_db();

//try
//{
  // Add the event
  
//  $query = 'INSERT INTO users(organization_id, email, first_name, last_name) VALUES(:organization_id, :email, :first_name, :last_name)';
  //$statement = $db->prepare($query);
  
  //$statement->bindValue(':organization_id', $organization_id);
 // $statement->bindValue(':email', $email);
 // $statement->bindValue(':first_name', $first_name);
 // $statement->bindValue(':last_name', $last_name) ;
 // $statement->execute();
  // get the new id
  //$scriptureId = $db->lastInsertId("scripture_id_seq");
  // Now go through each topic id in the list from the user's checkboxes
  //foreach ($topicIds as $topicId)
  //{
   // echo "ScriptureId: $scriptureId, topicId: $topicId";
   // // Again, first prepare the statement
   // $statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');
    // Then, bind the values
  //  $statement->bindValue(':scriptureId', $scriptureId);
   // $statement->bindValue(':topicId', $topicId);
   // $statement->execute();
  
//}
//catch (Exception $ex)
//{
  // Please be aware that you don't want to output the Exception message in
  // a production environment
 // echo "Error with DB. Details: $ex";
//  die();
//}

}




/**********************************************************


try
{
  // Add the Scripture
  // We do this by preparing the query with placeholder values
  $query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
  $statement = $db->prepare($query);
  // Now we bind the values to the placeholders. This does some nice things
  // including sanitizing the input with regard to sql commands.
  $statement->bindValue(':book', $book);
  $statement->bindValue(':chapter', $chapter);
  $statement->bindValue(':verse', $verse);
  $statement->bindValue(':content', $content);
  $statement->execute();
  // get the new id
  $scriptureId = $db->lastInsertId("scripture_id_seq");
  // Now go through each topic id in the list from the user's checkboxes
  foreach ($topicIds as $topicId)
  {
    echo "ScriptureId: $scriptureId, topicId: $topicId";
    // Again, first prepare the statement
    $statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');
    // Then, bind the values
    $statement->bindValue(':scriptureId', $scriptureId);
    $statement->bindValue(':topicId', $topicId);
    $statement->execute();
  }
}
catch (Exception $ex)
{
  // Please be aware that you don't want to output the Exception message in
  // a production environment
  echo "Error with DB. Details: $ex";
  die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: showTopics.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
****/
?>



</html>
</body>