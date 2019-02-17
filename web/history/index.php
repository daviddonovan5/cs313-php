

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

    <form name="newHistory" action="" method="POST">

      <span class="prompt"> Enter your first name </span><br>
      <input type="text" name="fname"><br>
      <span class="prompt"> Enter your last name </span><br>
      <input type="text" name="lname"><br>
      <span class="prompt"> Select the orginization </span><br>
      <select name="org">
      <option value=0>All</option>
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
      <textarea rows="4" cols="50"></textarea><br>
      
      
     
     
      
<input type="submit" value="Save" name="Save" class="navagation" />
</form>
<form action="results.php">
<input type="submit" value="See Results" name="results" class="navagation" />
</form>

<?php

 if (isset($_POST["newHistory"])){
echo("Thank you for submitting the history")

 }
// get the data from the POST 



/**********************************************************
// get the data from the POST
$book = $_POST['txtBook'];
$chapter = $_POST['txtChapter'];
$verse = $_POST['txtVerse'];
$content = $_POST['txtContent'];
$topicIds = $_POST['chkTopics'];
// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.
// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";
// we could (and should!) put additional checks here to verify that all this data is actually provided
require("dbConnect.php");
$db = get_db();
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