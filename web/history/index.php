

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
</html>
</body>