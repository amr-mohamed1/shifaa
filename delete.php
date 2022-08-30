<?php 

include "connect_db.php";

if ($_GET['from'] == "admins" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $admin_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM admins WHERE id = :admin_id");
    $stmt->bindParam(":admin_id" , $admin_id);
    $stmt->execute();
    header("Location:all_admins.php");
}elseif($_GET['from'] == "doctors" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $doctor_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM doctors WHERE id = :doctor_id");
    $stmt->bindParam(":doctor_id" , $doctor_id);
    $stmt->execute();
    header("Location:all_doctors.php");
}elseif($_GET['from'] == "services" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $service_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM services WHERE id = :service_id");
    $stmt->bindParam(":service_id" , $service_id);
    $stmt->execute();
    header("Location:all_services.php");
}