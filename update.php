<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM destinations WHERE locId = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $destination = $data['locName'];
        $country = $data['locCountry'];
        $price = $data['locPrice'];
        $duration = $data['duration'];
        $departure = $data['departure'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $image = $data['image'];
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?>
<?php include "jokes.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Destination</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
        <style>

            
         .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     

            fieldset {
                margin-left: auto;
                margin-right: auto;
                margin-top: 7vh;
                margin-bottom: 20vh;
                width: 87% ;
            }  
        </style>
    </head>
    <body>
        <!--Navbar-component-->
       <?php include_once "components/nav.php";?>
        <fieldset class="shadow rounded">
            <legend class='h2'>Update Destination<img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $destination ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Destination</th>
                        <td><input class='form-control' type="text" name="destination"  placeholder="Destination" value="<?php echo $destination ?>"/></td>
                    </tr>    
                    <tr>
                        <th>Country</th>
                        <td><input class='form-control' type="text" name="country"  placeholder="Country" value="<?php echo $country ?>" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price"  placeholder="Price" value="<?php echo $price ?>"/></td>
                    </tr>

                    <tr>
                        <th>Duration</th>
                        <td><input class='form-control' type="number" name="duration"  placeholder="Duration" value="<?php echo $duration ?>"/></td>
                    </tr>
                    <tr>
                        <th>Departure Date</th>
                        <td><input class='form-control' type="date" name="departure"  placeholder="Departure" value="<?php echo $departure ?>"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description"  placeholder="Description" value="<?php echo $description ?>"/></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name="longitude"  placeholder="Longitude" value="<?php echo $longitude ?>"/></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name="latitude"  placeholder="Latitude" value="<?php echo $latitude ?>"/></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['locId'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <!--Footer-component-->
        <?php include_once "components/footer_sticky.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
    </body>
</html>