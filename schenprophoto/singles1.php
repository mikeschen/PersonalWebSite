<?php
  $thisPage="Singles";
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
Singles
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
<a href="photopages/singles01.php"><img src="Images/singles/burning.jpg" alt="BurningMan" /></a>
<a href="photopages/singles02.php"><img src="Images/singles/fall.jpg" alt="Sedona" /></a>
<a href="photopages/singles03.php"><img src="Images/singles/coldcase.jpg" alt="Bike" /></a>
<a href="photopages/singles04.php"><img src="Images/singles/surfer.jpg" alt="Surfer" /></a>
<a href="photopages/singles05.php"><img src="Images/singles/supes.jpg" alt="Superstitions" /></a>
<a href="photopages/singles06.php"><img src="Images/singles/lightning.jpg" alt="Lightning" /></a>
<a href="photopages/singles07.php"><img src="Images/singles/jtreenight.jpg" alt="Joshua Tree" /></a>
<a href="photopages/singles08.php"><img src="Images/singles/diadelos.jpg" alt="DiaLosMuertes" /></a>
<a href="photopages/singles09.php"><img src="Images/singles/sf.jpg" alt="SF" /></a>
<a href="photopages/singles10.php"><img src="Images/singles/papago.jpg" alt="Papago" /></a>
<a href="photopages/singles11.php"><img src="Images/singles/china.jpg" alt="China" /></a>
<a href="photopages/singles12.php"><img src="Images/singles/mormons.jpg" alt="Mormons" /></a>
</div>
</div>
</body>
</script>
</body>
</html>