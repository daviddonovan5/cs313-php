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
  	<h4>Select the organization to see the activities </h4>
  	<form method="post" action="">
        
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
      </select>
    
    <input type="submit" value="Select" name="Select" class="navagation" />
    </form><hr>
<form action="index.php">
<input type="submit" value="Enter an Activity" name="enter" class="navagation" />
</form>

  <?php
      
      if (isset($_POST["org"])){
       
        if ($_POST["org"] == 0){
        include "db_connect.php";
        echo "<h3> All the Results</h3>";
        foreach ($db->query('SELECT event.act_date, event.title, event.description, organization.organization_name, users.first_name, users.last_name
        FROM event
        INNER JOIN users ON event.user_id = users.user_id
        INNER JOIN organization ON users.organization_id = organization.organization_id') as $row)
        {
        //print_r($row);
          echo "<p><b> <CENTER>" . $row['act_date'] . " {$row['title']} <br>{$row['organization_name']} </b></CENTER> </p>";
          echo "<p>" .$row['description'] . "</p>";
        }
      }
      else{
        echo("wow");

       // include "db_connect.php";
        
       // foreach ($db->query('SELECT event.act_date, event.title, event.description, organization.organization_name, users.first_name, users.last_name
        //FROM event
        //INNER JOIN users ON event.user_id = users.user_id
        //INNER JOIN organization ON users.organization_id = organization.organization_id'
        //WHERE orginzation_id='{$_POST["org"]}') as $row)
       // {
        //print_r($row);
        //  echo "<h3>Results for </h3>" . $row['organization_name'];
        
          //echo "<p><b> <CENTER>" . $row['act_date'] . " {$row['title']} <br>{$row['organization_name']} </b></CENTER> </p>";
          //echo "<p>" .$row['description'] . "</p>";
        //}

      }
    } 


    
  ?>
    
</html>
</body>