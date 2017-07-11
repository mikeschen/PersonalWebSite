<?php
  $thisPage="GrandCanyon";
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
Grand Canyon Fish
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

<a href="photopages/grandcanyon01.php"><img src="Images/grandcanyon/fish00.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon02.php"><img src="Images/grandcanyon/fish01.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon03.php"><img src="Images/grandcanyon/fish02.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon04.php"><img src="Images/grandcanyon/fish03.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon05.php"><img src="Images/grandcanyon/fish05.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon06.php"><img src="Images/grandcanyon/fish06.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon07.php"><img src="Images/grandcanyon/fish07.jpg" alt="Fish" /></a>
<a href="photopages/grandcanyon08.php"><img src="Images/grandcanyon/fish08.jpg" alt="Fish" /></a>

</div>
</div>
</body>
</script>
</body>
</html>