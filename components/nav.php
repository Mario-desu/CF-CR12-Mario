<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navi">
    <div class="container-fluid">
        <a class="navbar-brand px-3 fs-2" href="index.php"><img src="pictures/logo-white.png" class="img-fluid" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-4">
                <li class="nav-item">
                    <a class="nav-link active p-3 fs-3" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 fs-3" href="create.php">Add a Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 fs-3" href="api/webservice.php">API</a>
                </li>
            </ul>
    </div>
</nav>
<div class="container-fluid bg-secondary pt-3 text-white">
<a href='index.php'><button class='btn btn-warning btn-sm' type='button'>More jokes!</button></a>     
            <marquee class="text fs-3">
                <?php
                echo $jokes->joke;
                ?>
            </marquee>    
</div>


