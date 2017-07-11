<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script>

var YourParam="sunshine";

$(document).ready(function() {
  $("#goto").change(function(){
    if ($(this).val()!='') {
      window.location.href=$(this).val()+"?param="+YourParam;
    }
  });
});
var main = function() {
  /* Push the body and the nav over by 285px over */
  $('.icon-menu').click(function() {
    $('.menu').animate({
      left: "0px"
    }, 200);

    $('body').animate({
      left: "285px"
    }, 200);
  });

  /* Then push them back */
  $('.icon-close').click(function() {
    $('.menu').animate({
      left: "-285px"
    }, 200);

    $('body').animate({
      left: "0px"
    }, 200);
  });
};

$(document).ready(main);
</script>

<nav>

<div id="logo">
<a href="index.php"><img src="Images/schenLogo.gif"></a><br>
</div>
<div>
<ul>

<?php if ($thisPage=="Singles") { ?>
<li class="live">
<a href="../singles1.php">SINGLES</a>
</li>
<?php } else { ?>
<li><a href="../singles1.php">SINGLES</a></li>
<?php } ?>

<?php if ($thisPage=="Arizonans") { ?>
<li class="live">
<a href="../arizonans.php">THE ARIZONANS</a>
</li>
<?php } else { ?>
<li><a href="../arizonans.php">THE ARIZONANS</a></li>
<?php } ?>

<?php if ($thisPage=="Senior") { ?>
<li class="live">
<a href="../senior.php">MS. SENIOR AZ</a>
</li>
<?php } else { ?>
<li><a href="../senior.php">MS. SENIOR AZ</a></li>
<?php } ?>

<?php if ($thisPage=="GrandCanyon") { ?>
<li class="live">
<a href="../grandcanyon.php">GRAND CANYON FISH</a>
</li>
<?php } else { ?>
<li><a href="../grandcanyon.php">GRAND CANYON FISH</a></li>
<?php } ?>

<?php if ($thisPage=="TentCity") { ?>
<li class="live">
<a href="../tentcity.php">TENT CITY</a>
</li>
<?php } else { ?>
<li><a href="../tentcity.php">TENT CITY</a></li>
<?php } ?>

<?php if ($thisPage=="SchoolRock") { ?>
<li class="live">
<a href="../school.php">SCHOOL OF ROCK</a>
</li>
<?php } else { ?>
<li><a href="../school.php">SCHOOL OF ROCK</a></li>
<?php } ?>

<li><a href="https://vimeo.com/user6631962" target="_blank">VIDEOS</a>
</ul>
</div>
<div>
<ul>
<?php if ($thisPage=="About") { ?>
<li class="live">
<a href="../about.php">About Me</a>
</li>
<?php } else { ?>
<li><a href="../about.php">About Me</a></li>
<?php } ?>

<?php if ($thisPage=="Contact") { ?>
<li class="live">
<a href="../contact.php">Contact</a>
</li>
<?php } else { ?>
<li><a href="../contact.php">Contact</a></li>
<?php } ?>

<?php if ($thisPage=="Clients") { ?>
<li class="live">
<a href="../clients.php">Clients</a>
</li>
<?php } else { ?>
<li><a href="../clients.php">Clients</a></li>
<?php } ?>

<?php if ($thisPage=="Social") { ?>
<li class="live">
<a href="../social.php">Social</a>
</li>
<?php } else { ?>
<li><a href="../social.php">Social</a></li>
<?php } ?>


</ul>
</div>
<div class="emailer">
<ul>
<li><a href="mailto:mikeschenphoto@gmail.com">mikeschenphoto@gmail.com</a>
<li>602.540.8776 | Phoenix, AZ
<li>&copy; 2016 Michael Schennum
<li>All Rights Reserved.
</ul>
</div>

<div class="menu"> 

  <div class="icon-close">
    <img src="Images/ic_close_black_24dp_2x.png" />
  </div>
    
    <a href="http://www.mikeschen.com/mikeschenphoto/index1.php">-HOME</a> 
    <a href="http://www.mikeschen.com/mikeschenphoto/singles1.php">-SINGLES</a> <br>
    <a href="http://www.mikeschen.com/mikeschenphoto/arizonans.php">-ARIZONANS</a>
    <a href="http://www.mikeschen.com/mikeschenphoto/senior.php">-MS. SENIOR</a> <br>
    <a href="http://www.mikeschen.com/mikeschenphoto/grandcanyon.php">-GRAND CANYON FISH</a>
    <a href="http://www.mikeschen.com/mikeschenphoto/tentcity.php">-TENT CITY</a> <br>
    <a href="http://www.mikeschen.com/mikeschenphoto/school.php">-ROCK SCHOOL</a>
    <a href="https://vimeo.com/user6631962">-VIDEOS</a> <br>
    <a href="http://www.mikeschen.com/mikeschenphoto/about.php">-About Me</a>
    <a href="http://www.mikeschen.com/mikeschenphoto/contact.php">-Contact</a> <br>
    <a href="http://www.mikeschen.com/mikeschenphoto/clients.php">-Clients</a>
    <a href="http://www.mikeschen.com/mikeschenphoto/social.php">-Social</a> <br>

</div>

<div class="icon-menu">
  <i class="bars"></i>
  <img src="Images/ic_menu_black_24dp_2x.png" />
</div>

</nav>