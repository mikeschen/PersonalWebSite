<?php
  $thisPage="SchoolRock";
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
    $('#full img').each(function(i) {
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
<div id="full">
<img src="Images/schoolrock/rock08.jpg" alt="Rock" />
</div>
</div>
</body>
</script>
</body>
</html>