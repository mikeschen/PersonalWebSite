<?php
  $thisPage="TentCity";
?>
<html>
<head>
<link href="main.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script>
$(document).ready(function() {
  $(function() {
    $('#fds img').each(function(i) {
      $(this).delay((i++) * 250).fadeTo(1000, 1);
    })
  })
});
</script>
<title>
Tent City
</title>
</head
<body>
<div class="col-md-3">`
<?php
include("menu.php");
?>
</div>
<div class="col-md-9">
<div id="fds">

<a href="photopages/tentcity01.php"><img src="Images/tentcity/tentcity01.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity02.php"><img src="Images/tentcity/tentcity02.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity03.php"><img src="Images/tentcity/tentcity03.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity04.php"><img src="Images/tentcity/tentcity04.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity05.php"><img src="Images/tentcity/tentcity05.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity06.php"><img src="Images/tentcity/tentcity06.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity07.php"><img src="Images/tentcity/tentcity07.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity08.php"><img src="Images/tentcity/tentcity08.jpg" alt="Tent City" /></a>
<a href="photopages/tentcity09.php"><img src="Images/tentcity/tentcity09.jpg" alt="Tent City" /></a>

</div>
</div>
</body>
</script>
</body>
</html>