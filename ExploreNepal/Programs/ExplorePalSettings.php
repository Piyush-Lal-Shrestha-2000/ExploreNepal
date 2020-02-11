<!DOCTYPE html>
<html>
    <head>
        <title>ExplorePal | Help</title>
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
        <a href = "HomePage.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the home page</a>      
        <section class = "jumbotron">
            <div class = 'jumbotron pt-5 mb-0'>
                <center>
                    <h2>ADD TRANSLATION</h2>
                    <form class="mx-5 w-50 my-5 h-10 " method = "post"  enctype = "multipart/form-data">
                        <div class="form-group row">
                            <label for="inputEnglish" class="col-sm-2 col-form-label">Speech(English) </label>
                            <div class="col-sm-10">
                                <input type="text" name = "EnglishText" class="form-control" id="inputEnglish" placeholder="Enter English speech" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNepali" class="col-sm-2 col-form-label">Nepali translation </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNepali" name = "NepaliText" placeholder="Enter Nepali translation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAudio" class="col-sm-2 col-form-label">Audio</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputAudio" name = "AudioInput" placeholder="Input Audio" accept = "audio/*"required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" name = "AddAudio" id="SignIn" value = "Add">
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </section>
        <section class = "jumbotron">
            <div class = 'jumbotron pt-5 mb-0'>
                <center>
                    <h2 class = "pt-5">ADD PLACE</h2>
                    <form class="mx-5 w-50 my-5 h-100 " method = "post" >
                        <div class="form-group row">
                            <label for="inputEnglish" class="col-sm-2 col-form-label">Name </label>
                            <div class="col-sm-10">
                                <input type="text" name = "EnglishText" class="form-control" id="inputEnglish" placeholder="Place name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNepali" class="col-sm-2 col-form-label">Price range</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNepali" name = "NepaliText" placeholder="Price range ($XXX - $XX)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNepali" class="col-sm-2 col-form-label">Place address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNepali" name = "NepaliText" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNepali" class="col-sm-2 col-form-label">Place details</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputNepali" name = "NepaliText" required>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNepali" class="col-sm-2 col-form-label">Place latitude</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNepali" name = "NepaliText" placeholder="Latitude" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNepali" class="col-sm-2 col-form-label">Place longitude</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNepali" name = "NepaliText" placeholder="Longitude" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAudio" class="col-sm-2 col-form-label">Audio</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputAudio" name = "AudioInput" placeholder="Input Audio" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" name = "AddAudio" id="SignIn" value = "Add">
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </section>
    </body>
</html>
<?php
    include "ExplorePalDatabaseConnection.php";
    if(isset($_POST['AddAudio'])){
        $et = $_POST['EnglishText'];
        $nt = $_POST['NepaliText'];
        $ai = $_FILES['AudioInput']['name'];
        $ext = explode('.',$ai);
        $target = "../Audio/".md5(rand()).".".$ext[1];
        if(move_uploaded_file($_FILES['AudioInput']['tmp_name'],$target)){
            $sql = "INSERT INTO pocket_translator(pocket_translator_speech, pocket_translator_translation, pocket_translator_audio) VALUES('$et', '$nt', '$target')";
            if(mysqli_query($connection, $sql))
                echo "SUCCESS";
        }
    }  
?>
