<?php 

include "connect_db.php";

 global $con;
 $stmt = $con->prepare("SELECT * from services");
 $stmt->execute();
 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

 $stmt2 = $con->prepare("SELECT * from doctors");
 $stmt2->execute();
 $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/services.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

  <div class="navb">
    <div class="row">
    <div class="col-md-4">
      <img src="img/logo.png">
    </div>
    <div class="col-md-4">
      <p> our services <br>نقدم افضل الخدمات والتحاليل الطبية الشاملة<br> ونوفرها بأسلوب حديث وآمن <br>
        ونحرص علي بناء علاقات قوية مع عملائنا</p>    </div>
    <div class="col-md-4">
      <img style="width:150px ;" src="img/لوجو تحاليل (1).png" class="logos" >
    </div>
  </div>
</div>

  <div class="services mt-5">
    <div class="container">
    <h2 class="header">Available analyzes</h2>
      <div class="row mb-3">
  <?php foreach($rows as $data){ ?>

      <div class="col-md-3">
       <div class="item">
        <img style="width:80%" src="img/services/<?php echo $data['img'] ?>" alt="service image">
      </div>
      <h3><?php echo $data['service_name'] ?> </h3>
      </div>

      <?php } ?>
     

  </div>
  </div>
  </div>

  <div class="services mt-5">
    <div class="container">
    <h2 class="header">Our Doctors</h2>
      <div class="row mb-3">
      <?php foreach($rows2 as $data2){ ?>
      <div class="col-md-3">
       <div class="item">
        <img style="width:80%" src="img/doctors/<?php echo $data2['img'] ?>" alt="service image">
      </div>
      <h3><?php echo $data2['name'] ?></h3>
      <p class="text-center"><?php echo $data2['dep'] ?></p>
      </div>
      <?php } ?>

    </div>
  </div>
  </div>

    
  <script src="img/https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>