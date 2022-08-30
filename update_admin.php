<?php 
include "connect_db.php";

@$id = $_GET['id'];
 global $con;
 $stmt = $con->prepare("SELECT * from admins WHERE id=?");
 $stmt->execute(array($id));
 $row = $stmt->fetch(PDO::FETCH_ASSOC);



if($_SERVER["REQUEST_METHOD"] == "POST"){
  @$name = $_POST['admin_name'];
  @$email = $_POST['admin_email'];
  @$pass = $_POST['pass'];
  @$hashed_pass = sha1($pass);
  global $con;
    $stmt = $con->prepare("UPDATE admins SET `name`=?,`email`=?,`pass`=? WHERE `id`=?");
    $stmt->execute(array(
         $name,
         $email,
         $hashed_pass,
         $id,
    ));
    header("location:all_admins.php");
}

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
<div class="container">
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">admin Name</label>
    <input type="text" name="admin_name" value="<?php echo $row['name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">admin email</label>
    <input type="email" name="admin_email" value="<?php echo $row['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">admin pass</label>
    <input type="password" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>