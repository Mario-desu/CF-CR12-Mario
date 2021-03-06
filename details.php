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
        $duration = $data['duration'];
        $departure = $data['departure'];
        $description = $data['description'];
        $longitude = $data['longitude']; 
        $latitude = $data['latitude']; 
        $price = $data['locPrice'];
        $image = $data['image'];

        

        $table = "
        <tr>
            <th>Destination</th>
            <td>" .$destination."</td>
        </tr>    
        <tr>
            <th>Country</th>
            <td>" .$country."</td>
        </tr>
        <tr>
            <th>Duration</th>
            <td>" .$duration." nights</td>
        </tr>
        <tr>
            <th>Departure</th>
            <td class='pb-5'>" .$departure."</td>
        </tr>
        <tr>
            <th>Price</th>
            <td class='pb-5'>€ " .$price."</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>" .$description."</td>
        </tr>";

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
        <title>CR12 Mario</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
        <style>

        #map {
            height: 50vh;
        }

        

.fieldDetails {    
        margin: auto;
        margin-top: 13vh;
        margin-bottom: 13vh;
        width: 95% ;
    }


        </style>
    </head>
    <body>
        <!--Navbar-component-->
<?php include_once "components/nav.php";?>
        <fieldset class="shadow rounded fieldDetails">
            <legend class='h1 text-center'><?php echo $destination ?> </legend>
            <form action="details.php"  method="post" enctype="multipart/form-data">
                <div>
                 <?php echo "<img class='mb-5 img-fluid mx-auto d-block' src='pictures/" .$image."'";?></div>
                <table class="table">
                <?php echo $table;?>
                </table>
            </form>

            <!--placing Google Maps-->
            <div id="map"></div>
        </fieldset>


        <!--Footer-component-->
        <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
        

        <!--Google Maps API-->

        <script>

        var map;

        function initMap() {

            let coordinates = {
                lat: <?php echo $latitude?>,
                lng: <?php echo $longitude?>

            };

            map = new google.maps.Map(document.getElementById('map'), {

                center: coordinates,
                zoom: 9

            });

            let pinpoint = new google.maps.Marker({

                position: coordinates,
                map: map

            });


            
}
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    </body>
</html>