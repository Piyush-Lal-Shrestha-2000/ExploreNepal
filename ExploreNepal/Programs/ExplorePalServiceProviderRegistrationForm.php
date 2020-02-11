<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ExplorePal | Service-Provider Registration Form</title>
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
        
        <style>

            i{
                margin: 10px;
            }
            form{
                text-align: left;
            }

        </style>

        <script>

            function toggleButtonActiveness(x,y){
                var chk = document.getElementById(x).checked;
                if(chk)
                    document.getElementById(y).disabled = false;
                else
                    document.getElementById(y).disabled = true;
            }
            function addExtra(x){
                if(x){
                    document.getElementById("inputService").disabled = false;
                    document.getElementById("inputService").required = true;                    
                }else{
                    document.getElementById("inputService").disabled = true;
                    document.getElementById("inputService").required = false;                    
                }
            }
        </script>
    </head>
    <body>
        <a href = "HomePage.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the home page</a>
        <div class = 'jumbotron pt-5 mb-0'>
            <center>
                <h2 class = "pt-5">SERVICE-PROVIDER'S REGISTRATION FORM</h2>
                <form class="mx-5 w-50 my-5 h-100 " method = "post" enctype = "multipart/form-data">
                    <div class="form-group row">
                        <label for="inputFullName" class="col-sm-2 col-form-label">Full name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputFullName" name = "fname" placeholder="Full name" required>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gen" id="gridRadios1" value="Male" required>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gen" id="gridRadios2" value="Female" required>
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gen" id="gridRadios3" value="Others" required>
                                    <label class="form-check-label" for="gridRadios3">
                                        Others
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="inputCompanyName" class="col-sm-2 col-form-label">Company name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompanyName" name = "cname" placeholder="Company Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCompanyAddress" class="col-sm-2 col-form-label">Company address </label>
                        <div class="col-sm-10">
                            <select id="country" class="form-control w-50 ml-3" name = "caddress">
                            <?php
                                include "ExplorePalDatabaseConnection.php";
                                $sql = "SELECT DISTINCT place_address FROM place_details";
                                $R = mysqli_query($connection, $sql);
                                while($row = mysqli_fetch_assoc($R))
                                    echo "<option value='".$row['place_address']."'>".$row['place_address']."</option>";    
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputContactNumber" class="col-sm-2 col-form-label">Contact no </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputContactNumber" name = "cno" placeholder="Contact number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputImage" class="col-sm-2 col-form-label">Image </label>
                        <div class="col-sm-10">
                            <input type = "file" accept="image/*" id="inputImage" class="form-control" name = "cimage" placeholder = "Input image to represent your company" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name ="em" placeholder="Email" required>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name = "pass" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputRPassword" class="col-sm-2 col-form-label">Re-enter password </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputRPassword" placeholder="Password" name = "rpass" required>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class = "row">
                            <legend class="col-form-label col-sm-2 pt-0">Service</legend>
                            <select id="country" name="service" class="form-control w-50 ml-3" required>
                                <option value="Hotel, Lodging & Fooding" onclick="addExtra(false)">Hotel, Lodging & Fooding</option>
                                <option value="Renting" onclick="addExtra(false)">Renting</option>
                                <option value="Tour Guide & Translator" onclick="addExtra(false)">Tour Guide & Translator</option>
                                <option value="Others" onclick="addExtra(true)">Others</option>
                            </select>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="inputService" class="col-sm-2 col-form-label">Service type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name = "stype" id="inputService" placeholder="Enter service type" disabled>
                        </div>
                    </div>
                    <div class="form-group row">     
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="TermsAndConditionsCheck" onclick="toggleButtonActiveness('TermsAndConditionsCheck','SignIn')">
                                <label class="form-check-label" for="gridCheck1">
                                    I accept the <a href = '#' data-toggle="modal" data-target="#TermsAndConditions">terms and condition.</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary" disabled="true" id="SignIn" name = "register" value ="Register">
                        </div>
                    </div>
                </form>
            </center>
        </div>

        <!-- Start of TermsAndConditionsModal -->

        <div class="modal" id="TermsAndConditions">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Terms & Conditions</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Our terms and conditions here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of TermsAndConditionsModal -->
        <!-- modal-->
        <div class="modal fade" id="goToModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <p>Thank you for Registering! <a href = "HomePage.php">Click here to goto the homepage.</a></p>                     
                    </div>    
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['register'])){
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];
        if($pass != $rpass){
            echo "Passwords do not match.";
            return;
        }$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
        $service = $_POST['service'];
        if($service == "Others")
            $service = $service." ".$_POST['stype'];
        $fname = $_POST['fname'];
        $gen = $_POST['gen'];
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];
        $cno = $_POST['cno'];
        $em = $_POST['em'];
        $fn = $_FILES['cimage']['name'];
        $ext = explode('.',$fn);
        $target = "../CompanyImages/".md5(rand()).".".$ext[1];
        if(move_uploaded_file($_FILES['cimage']['tmp_name'],$target)){
            $sql0 = "INSERT INTO users(user_full_name, user_email, user_password, user_gender, user_country, user_post) VALUES ('$fname', '$em', '$pass', '$gen', 'Nepal', 'Service Provider')";
            if(mysqli_query($connection, $sql0))
                echo "<br>User registered.";
            $sql1 = "SELECT user_id FROM users GROUP BY user_id DESC LIMIT 1";
            $uid = 0;
            $R = mysqli_query($connection, $sql1);
            while($row = mysqli_fetch_assoc($R))
                $uid = $row['user_id'];
            $sql2 = "INSERT INTO company_details(user_id, company_name, company_service, company_address, company_contact_number, company_image) VALUES ('$uid', '$cname', '$service', '$caddress', '$cno', '$target')";
            if(mysqli_query($connection, $sql2))
                echo "<br>Company registered.";
            $_SESSION['LoggedIn'] = true;
            $_SESSION['user'] = $fname;
            echo "<script>$('#goToModal').modal('show');</script>";
        }
    }  
?>
