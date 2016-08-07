<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet"> <!font>
      <link rel="stylesheet" href="./bootstrap.css">
      <title dir="auto">الجمعية القرأنية بأجيم</title>
      <link rel="stylesheet" type="text/css" href="./style.css" id="curstyle" title="Web">
      <link rel="stylesheet" href="index.css" >
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<body  >
<div dir="rtl">

<?php
$c = $b = $d = $e = $f = '' ;
$a = "class = 'active'" ;
include_once('navbar.php') ;

 ?>

    <div class="titel">
    <div class="jumbotron">
      <div class="container-fluid">
        <h1 dir="rtl"> الجمعية القرأنية بأجيم ترحب بكم</h1>
        <p> بالقرآن نرتقي و على الخير نلتقي </p>
       </div>
    </div>
  </div>

    <br>

<div class="news" >
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-4">
      <h3>الكتاتيب الصيفية</h3>
      <div class="thumbnail">
           <img src="./img/3" >
           <p> هذا نص تجريبي من أجل تحديد الشكل العام للموقع و هو قابل لتعديل </p>
           <P><a href="" >إقرأ المزيد </a></p>
      </div>
    </div>

    <div class="col-sm-4">
      <h3>دروس التجويد و الأحكام</h3>
      <div class="thumbnail">
           <img src="./img/2" >
           <p> هذا نص تجريبي من أجل تحديد الشكل العام للموقع و هو قابل لتعديل </p>
           <P><a href="" >إقرأ المزيد </a></p>

      </div>
    </div>

    <div class="col-sm-4">
      <h3>السهارات الدينية</h3>
      <div class="thumbnail">
           <img src="./img/1" >
           <p> هذا نص تجريبي من أجل تحديد الشكل العام للموقع و هو قابل لتعديل </p>
           <P><a href="" >إقرأ المزيد </a></p>

      </div>

    </div>
  </div>
</div>
</div>



<?php include_once('fin.php') ?>




  </div>
 </div>
</div>
</body>
</html>
