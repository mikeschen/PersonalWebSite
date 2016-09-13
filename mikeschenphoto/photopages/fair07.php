<?php
  $thisPage="Arizonans";
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
The Arizonans
</title>
</head>
<body>
<div class="col-md-3">
<?php
include("menu.php");
?>
</div>
<div id="full">
<div class="col-md-6">
<img src="Images/statefair/fair11.jpg" alt="Arizonans" />
</div>
</div>
</body>
</script>
</body>
</html>