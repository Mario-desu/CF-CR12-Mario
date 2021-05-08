<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if ($_POST) {  
   $destination = $_POST['destination'];
   $country = $_POST['country'];
   $price = $_POST['price'];
   $duration = $_POST['duration'];
   $departure = $_POST['departure'];
   $longitude = $_POST['longitude'];
   $description = $_POST['description'];
   $latitude = $_POST['latitude'];
   
   $uploadError = '';
   //this function exists in the service file upload.
   $image = file_upload($_FILES['image']);  
 
   $sql = "INSERT INTO destinations (locName, image, locCountry, description, locPrice, duration, departure, longitude, latitude) VALUES ('$destination', '$image->fileName', '$country', '$description', $price, $duration, '$departure', $longitude, $latitude)";

   if ($connect->query($sql) === true ) {
       $class = "success";
       $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $destination </td>
            <td> $country </td>
            <td> $departure </td>
            </tr></table><hr>";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   }
   $connect->close();
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php' ?>
       <link rel="stylesheet" href="../css/styles.css">
         <!--font-awesome-->
       <script src="https://kit.fontawesome.com/3543c7cdbb.js" crossorigin="anonymous"></script>

       <style>
            
            body {
            
                background: url("../pictures/1971537.jpg");
                background-size: cover;
                min-height: 100vh;
            }
    
        </style>  
   </head>
   <body>
        <!--Navbar-component-->
<?php include_once "../components/nav_actions.php";?>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Create new entry</h1>
           </div>
            <div class="alert alert-<?=$class;?> shadow rounded" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary"  type='button'>Home</button></a>
           </div >
       </div>
                     <!--Footer-component-->
 <?php include_once "../components/footer.php";?>
<!--Bootstrap-JS-component-->
<?php include_once "../components/boot_js.php";?>   
   </body>
</html>