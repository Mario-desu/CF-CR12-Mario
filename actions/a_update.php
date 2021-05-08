<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {    
    $destination = $_POST['destination'];
    $country = $_POST['country'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $departure = $_POST['departure'];
    $description = $_POST['description'];
    $long = $_POST['longitude'];
    $latitude = $_POST['latitude'];
   
    $id = $_POST['id'];
    //variable for upload pictures errors is initialized
    $uploadError = '';

    $image = file_upload($_FILES['image']);//file_upload() called  
    if($image->error===0){
        ($_POST["image"]=="product.png")?: unlink("../pictures/$_POST[image]");           
        $sql = "UPDATE destinations SET locName = '$destination', locCountry = '$country', locPrice = $price, duration = $duration, departure = '$departure', description = '$description', longitude = $long, latitude = $latitude, image = '$image->fileName' WHERE locId = {$id}";
    }else{
        $sql = "UPDATE destinations SET locName = '$destination', locCountry = '$country', locPrice = $price, duration = $duration, departure = '$departure', description = '$description', longitude = $long, latitude = $latitude WHERE locId = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    $connect->close();    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
                <!--Navbar-component-->
<?php include_once "../components/nav_actions.php";?>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?> shadow rounded" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
                 <!--Footer-component-->
     <?php include_once "../components/footer.php";?>
    <!--Bootstrap-JS-component-->
    <?php include_once "../components/boot_js.php";?>
    </body>
</html>