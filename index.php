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
       <link rel="stylesheet" href="css/style.css">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="css/services.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Bootstrap demo</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


  <title> Shifa Lab</title>
    </head>
    <body>
        <header class="head">
            <h2> <a href="#" class="logo"><img src="img/logo.png"> </a></h2 >
                
            <ul>
                <li> <a href="index.php" class="active"> Home</a></li>
                <li> <a href="about.html" class="active"> About us</a></li>
                <li> <a href="technology.html" class="active"> Tecnology</a></li>
                <li> <a href="sevices.php" class="active"> Servises</a></li>
                <li> <a href="contact.html" class="active" > Contact us</a></li>
                
            </ul>
        </header>
        
            <section class="div">
                <div class="text">
                    <img src="img/Png.png">
                     <p> Good health for better life</p>
                </div>
            
            </section>

            <div>
                <p class="h1">about us</p>
                
                <p class="c"> Shifa lab is one of the best labs for mefical tests 
                that provide all services for patient health care <br>
            and keep in touch with our clients every where and all the time we are here for them.</p>
        </div>
        <div class="t">
            <p > take care <br>your health</p>
            <img src="img/IMG_20220829_011526.jpg" class="homim">
        </div>

            <div class="tech">
            <h1>Shifa-Lab tecnology</h1>
            <br>
            <p >Our lab is designed for medical rays and analysis, <br>we provide our distinguished medical servises under <br>the supervision of 
            a group of doctors and nurses throughout the day. <br> we have modern automatic devices to ensure the acurancy <br>
            and speed of completing the analyzes according to<br> our strategy: Good health for better life. </p>
            <img src="img/image_downloader_1661271572262.jpg" class="o">
            <img src="img/image_downloader_1661548323539.jpg">
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
             
        
               
        
            
         
        




            
            
        <div class="contact" >
                <div class="overlay"></div>
                <div class="container">
                    <h2> Contact Us</h2>
                    <p> For any questions or problems contact us immediately </p>
                    <br>
                        <form action="">
                            <div class="left">
                                <input type="text" placeholder=" Your Name" name="User Name">
                                <input type=" phonenumber" placeholder=" Your Number" name="Number">
                                <input type="email" placeholder=" Your Email" name="Email">
                                
                            </div>
                            <div class="right">
                                <textarea placeholder="Your Message" name="message"></textarea>
                                <input type="submit" value="send">
                            </div>
                        </form>
                        <br>
                        
                        <div >
                            
                        <img src="img/location.png">
                        <p class="pp"> Site Bransh: EL-Salam st,Cairo,Egypt</p>
                        <br> 
                        <img src="img/phone.png">
                        <p class="num"> 01202398100</p>
                        <br>
                        <img src="img/mail.png">
                        <p class="p"> sifalap@gmail.com</p>
                        <br>
                        <img src="img/time.png">
                        <p class="pp"> Sat-Fri , 7AM to 11PM</p>
                       
                        </div>
               
            </div>
        
            <script src="img/https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    </body>
</html>