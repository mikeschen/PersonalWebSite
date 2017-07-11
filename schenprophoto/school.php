photopages/<?php
  $thisPage="SchoolRock";
?>
<html>
<head>
<link href="schenprophoto-styles.css" type="text/css" rel="stylesheet" />
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
SINGLES
</title>
</head>
<body>
<div class="col-md-3">
<?php
include("menu.php");
?>
</div>
<div class="col-md-9">
<div id="fds">

<a href="photopages/schoolrock01.php"><img src="Images/schoolrock/rock01.jpg" alt="school" /></a>
<a href="photopages/schoolrock02.php"><img src="Images/schoolrock/rock02.jpg" alt="school" /></a>
<a href="photopages/schoolrock03.php"><img src="Images/schoolrock/rock03.jpg" alt="school" /></a>
<a href="photopages/schoolrock04.php"><img src="Images/schoolrock/rock04.jpg" alt="school" /></a>
<a href="photopages/schoolrock05.php"><img src="Images/schoolrock/rock05.jpg" alt="school" /></a>
<a href="photopages/schoolrock06.php"><img src="Images/schoolrock/rock06.jpg" alt="school" /></a>
<a href="photopages/schoolrock07.php"><img src="Images/schoolrock/rock07.jpg" alt="school" /></a>
<a href="photopages/schoolrock08.php"><img src="Images/schoolrock/rock08.jpg" alt="school" /></a>

</div>
</div>
</body>
</script>
</body>
</html>