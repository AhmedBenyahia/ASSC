<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet"> <!font>
      <link rel="stylesheet" href="./bootstrap.css">
      <title dir="auto">الجمعية القرأنية بأجيم</title>
      <link rel="stylesheet" type="text/css" href="./style.css" id="curstyle" title="Web">
      <link rel="stylesheet" href="kotab.css" >
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">           <!sildshow >

</head>
<body  >

<div dir="rtl">

  <?php
  $c = $a = $b = $e = $f = '' ;
  $d = "class = 'active'" ;
  include_once('navbar.php') ;

   ?>

  <div class="sild">

      <div class="w3-content w3-display-container" style="max-width:1500px">
        <img class="mySlides" src="img/5" style="width:100%">
        <img class="mySlides" src="img/6" style="width:100%">
        <img class="mySlides" src="img/5" style="width:100%">
        <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
          <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10094;</div>
          <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10095;</div>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
      </div>
    </div>







    <?php include_once('fin.php') ?>



  </div>
</div>



 <script>
 var slideIndex = 1;
 showDivs(slideIndex);

 function plusDivs(n) {
   showDivs(slideIndex += n);
 }

 function currentDiv(n) {
   showDivs(slideIndex = n);
 }

 function showDivs(n) {
   var i;
   var x = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("demo");
   if (n > x.length) {slideIndex = 1}
   if (n < 1) {slideIndex = x.length}
   for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-white", "");
   }
   x[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " w3-white";
 }
 </script>
</body>
</html>
