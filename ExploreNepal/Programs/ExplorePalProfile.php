<?php
    session_start();
    if(!isset($_SESSION['user']))
        header("Location: ../Programs/HomePage.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ExplorePal | Profile | <?php echo $_SESSION['user']; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel = "icon" href = "https://img.icons8.com/cotton/64/000000/worldwide-location--v1.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <a href = "HomePage.php" class = "btn-success my-auto"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the home page</a>   
        <section class = "jumbotron mt-5">
            <div class="container my-5">
                <div class="row my-2">
                    <div class="col-lg-8 order-lg-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#company" data-toggle="tab" class="nav-link active"><?php echo $_SESSION['user']; ?></a>
                            </li>
                            <?php
                                if($_SESSION['user_post']=='Service Provider'){
                                    echo "
                                        <li class='nav-item'>
                                            <a href='' data-target='#company' data-toggle='tab' class='nav-link active'> Company </a>
                                        </li>
                                    ";
                                }
                            ?>
                        </ul>
                        <div class="tab-content py-4">
                            <div class="tab-pane active" id="profile">
                                <h4 class="mb-3">User Profile</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>About</h5>
                                        <p>
                                            Contents here
                                        </p>
                                        <button class = "btn btn-danger" onclick="document.location.href='AuthenticateUser.php?logout=yes';">Logout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content py-4">
                            <div class="tab-pane" id="company">
                                <h5 class="mb-3">Company name</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 text-center">
                        <img src="../DesignImages/DefaultPhoto.png" class="mx-auto img-fluid img-circle d-block" height = '100px' width= '170px' alt="avatar">
                        <h6 class="mt-2"><?php echo $_SESSION['user'] ?></h6>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
