<?php
  $thisPage="Senior";
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
Senior
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
<a href="photopages/senior01.php"><img src="Images/senior/senior01.jpg" alt="Senior" /></a>
<a href="photopages/senior02.php"><img src="Images/senior/senior02.jpg" alt="Senior" /></a>
<a href="photopages/senior03.php"><img src="Images/senior/senior03.jpg" alt="Senior" /></a>
<a href="photopages/senior04.php"><img src="Images/senior/senior04.jpg" alt="Senior" /></a>
<a href="photopages/senior05.php"><img src="Images/senior/senior05.jpg" alt="Senior" /></a>
<a href="photopages/senior06.php"><img src="Images/senior/senior06.jpg" alt="Senior" /></a>
<a href="photopages/senior07.php"><img src="Images/senior/senior07.jpg" alt="Senior" /></a>
<a href="photopages/senior08.php"><img src="Images/senior/senior08.jpg" alt="Senior" /></a>
<a href="photopages/senior09.php"><img src="Images/senior/senior09.jpg" alt="Senior" /></a>
<a href="photopages/senior10.php"><img src="Images/senior/senior10.jpg" alt="Senior" /></a>
<a href="photopages/senior11.php"><img src="Images/senior/senior11.jpg" alt="Senior" /></a>
<a href="photopages/senior12.php"><img src="Images/senior/senior12.jpg" alt="Senior" /></a>
</div>
</div>
</body>
</script>
</body>
</html>