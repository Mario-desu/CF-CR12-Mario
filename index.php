<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM destinations";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= 
       //img-style = class for CSS
            "<div class='col'>
                <div class='card h-100 shadow card-style'>
                        <img class='img-fluid img-style' src='pictures/" .$row['image']."' alt='" .$row['locName']."'>
                    <div class='card-body'>
                        <h5 class='card-title'>" .$row['locName']." - " .$row['locCountry']."</h5>
                        <p class='card-text'>Price: € " .$row['locPrice']."</p>
                        <p class='card-text'>Duration: " .$row['duration']." days</p>
                        <p class='card-text'>Departure: " .$row['departure']."</p>
                        <p class=''>
                            <span><a href='update.php?id=" .$row['locId']."'><button class='btn btn-primary btn-sm' type='button'><i class='far fa-edit'></i></button></a>
                            <a href='delete.php?id=" .$row['locId']."'><button class='btn btn-danger btn-sm' type='button'><i class='fas fa-trash'></i></button></a><a href='details.php?id=" .$row['locId']."'><button class='btn btn-info btn-sm  ms-1' type='button'>Details</button></a></span>
                        </p>

                    </div>
                </div>
            </div>    ";
        };
    } else {
        $tbody =  "<div>No Data Available </div>";
    }

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CR12 Mario</title>
        <!--Bootstrap component-->
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="css/styles.css">
          <!--font-awesome-->
        <script src="https://kit.fontawesome.com/3543c7cdbb.js" crossorigin="anonymous"></script>
<style>
    .img-style {
        width: 100%;    /* or 100% of container */
        height: 16em;      /*  or 100% of container */
        object-fit: cover; /* none can be an option too as cover may deform it*/
        object-position: 50% 50%; /* if both 50% will center it*/
    
}
   
body {
    background: url("https://ibb.co/SPWVD85"); 
    /* background: url("https://ibb.co/SPWVD85");*/
    background-size: cover;
    min-height: 100vh;
}

</style>



    </head>
    <body>
        <!--Navbar-component-->
       <?php include_once "components/nav.php";?>




       <div><button id= "button" >Get jokes</button>
 
            <h1>Jokes</h1>
            <div id="jokes">
            <!--our jokes will be displayed in this div-->
            </div>
        </div>


        <div class="manageProduct w-85 mt-3 mb-5 px-3">    
           <!-- <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add destination</button></a>
                <p></p>
            </div>-->
            <p class='h1 text-center'>Destinations</p>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    
                    <?php echo "$tbody";?>
                    
                </div>
            </div>
        </div>
         <!--Footer-component-->
       <?php include_once "components/footer.php";?>
        <!--Bootstrap-JS-component-->
        <?php include_once "components/boot_js.php";?>
       <script src="ajax.js"></script>
    </body>
</html>