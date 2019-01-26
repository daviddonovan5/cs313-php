<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> David Donovan's Assignments</title>
   <link rel="stylesheet" type="text/css" href="stylesheets.css">
</head>

<body>
<center><h2>David Donovan's Assignments</h2></center>
<?php
echo ('Today\'s Date: ');
echo date('l, F j');
?>

<div class="tab">
  <button class="tablinks" onclick="assingment(event, 'week1')">week 01</button>
  <button class="tablinks" onclick="assingment(event, 'week2')">week 02</button>
  <button class="tablinks" onclick="assingment(event, 'week3')">week 03</button>
  <button class="tablinks" onclick="assingment(event, 'week4')">week 04</button>
  <button class="tablinks" onclick="assingment(event, 'week5')">week 05</button>
  <button class="tablinks" onclick="assingment(event, 'week6')">week 06</button>
  <button class="tablinks" onclick="assingment(event, 'week7')">week 07</button>
  <button class="tablinks" onclick="assingment(event, 'week8')">week 08</button>
  <button class="tablinks" onclick="assingment(event, 'week9')">week 09</button>
  <button class="tablinks" onclick="assingment(event, 'week10')">week 10</button>
  <button class="tablinks" onclick="assingment(event, 'week11')">week 11</button>
  <button class="tablinks" onclick="assingment(event, 'week12')">week 12</button>
  <button class="tablinks" onclick="assingment(event, 'week13')">week 13</button>
</div>

<div id="week1" class="tabcontent">
  <h3> Week 1</h3>
  <p> Here is the link for Assingment 1: <a href="https://desolate-atoll-87534.herokuapp.com/hello.html" target="_blank">https://desolate-atoll-87534.herokuapp.com/hello.html</a> </p>
</div>

<div id="week2" class="tabcontent">
  <h3> Week 2</h3>
 <p> Here is the link for the Introduction: <a href="https://desolate-atoll-87534.herokuapp.com/index.html" target="_blank">https://desolate-atoll-87534.herokuapp.com/index.html</a> </p>
</div>


<div id="week3" class="tabcontent">
	<h3> Week 3</h3>
  Here is the link for the Shopping Cart: <a href="https://desolate-atoll-87534.herokuapp.com/wk3/prove.php" target="_blank">https://desolate-atoll-87534.herokuapp.com/index.html</a> </p>
</div>

<div id="week4" class="tabcontent">
	<h3> Week 4</h3>
  <p> week 4 assingment is coming </p>
</div>

<div id="week5" class="tabcontent">
	<h3> Week 5</h3>
  <p> week 5 assingment is coming </p>
</div>

<div id="week6" class="tabcontent">
	<h3> Week 6</h3>
  <p> week 6 assingment is coming </p>
</div>

<div id="week7" class="tabcontent">
	<h3> Week 7</h3>
  <p> week 7 assingment is coming </p>
</div>

<div id="week8" class="tabcontent">
	<h3> Week 8</h3>
  <p> week 8 assingment is coming </p>
</div>

<div id="week9" class="tabcontent">
	<h3> Week 9</h3>
  <p> week 9 assingment is coming </p>
</div>

<div id="week10" class="tabcontent">
	<h3> Week 10</h3>
  <p> week 10 assingment is coming </p>
</div>

<div id="week11" class="tabcontent">
	<h3> Week 11</h3>
  <p> week 11 assingment is coming </p>
</div>

<div id="week12" class="tabcontent">
	<h3> Week 12</h3>
  <p> week 12 assingment is coming </p>
</div>

<div id="week13" class="tabcontent">
	<h3> Week 13</h3>
  <p> week 13 assingment is coming </p>
</div>


<script>
function assingment(evt, topic) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(topic).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>



</html>
</body>