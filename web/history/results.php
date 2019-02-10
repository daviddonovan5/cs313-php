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
      <option value="Bishopric">Bishopric</option>
      <option value="Elders Quorum">Elders Quorum</option>
      <option value="Primary">Primary</option>
      <option value="Relief Society">Relief Society</option>
      <option value="Sunday School">Sunday School</option>
      <option value="Ward Activities">Ward Activities</option>
      <option value="Ward Missionary">Ward Missionary</option>
      <option value="Young Men">Young Men</option>
      <option value="Young Women">Young Women</option>
      </select>
    
    <input type="submit" value="Select" name="Select" class="navagation" />
    </form><hr>
<form action="index.php">
<input type="submit" value="Enter an Activity" name="enter" class="navagation" />
</form>

  <?php
      
      if (isset($_POST["org"])){
       include "db_connect.php";
        if ($_POST["org"] == 0){
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
        

         
          foreach ($db->query("SELECT event.act_date, event.title, event.description, organization.organization_name, users.first_name, users.last_name
            FROM event
            INNER JOIN users ON event.user_id = users.user_id
            INNER JOIN organization ON users.organization_id = organization.organization_id
            WHERE organization.organization_name = {$_POST["org"]}") as $row)
        {
        //print_r($row);
          
          echo "<p><b> <CENTER>" . $row['act_date'] . " {$row['title']} </b></CENTER> </p>";
          echo "<p>" .$row['description'] . "</p>";
        }

       

      }
    } 


    
  ?>
    
</html>
</body>