<?php include "jokes.php" ?>

<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <link rel="stylesheet" href="css/styles.css">
       <title>CR12 Mario</title>
       <style>
           fieldset {
               margin: auto;
               margin-top: 13vh;
               margin-bottom: 13vh;
               width: 70% ;
           }      

       </style>
   </head>
   <body>
              <!--Navbar-component-->
              <?php include_once "components/nav.php";?> 
        <fieldset class="shadow rounded">
            <legend class='h2'>Add Destination</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                    <tr>
                        <th>Destination</th>
                        <td><input class='form-control' type="text" name="destination"  placeholder="Destination"/></td>
                    </tr>    
                    <tr>
                        <th>Country</th>
                        <td><input class='form-control' type="text" name="country"  placeholder="Country"/></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price"  placeholder="Price" /></td>
                    </tr>

                    <tr>
                        <th>Duration</th>
                        <td><input class='form-control' type="number" name="duration"  placeholder="Duration" /></td>
                    </tr>
                    <tr>
                        <th>Departure Date</th>
                        <td><input class='form-control' type="date" name="departure"  placeholder="Departure" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description"  placeholder="Description" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name="latitude"  placeholder="Latitude" /></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name="longitude"  placeholder="Longitude" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Add Destination</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                    
                </table>
            </form>
        </fieldset>
        <!--Footer-component-->
       <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
   </body>
</html>