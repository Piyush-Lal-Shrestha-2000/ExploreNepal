<?php
    session_start();
    if(!isset($_SESSION['LoggedIn']))
        $_SESSION['LoggedIn'] = false;
    if(!isset($_SESSION['IsAdmin']))
        $_SESSION['IsAdmin'] = false;
?>
<!-- Navigation bar section -->

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="HomePage.php" style = "font-family: Verdana, Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', sans-serif"><img src="https://img.icons8.com/cotton/64/000000/worldwide-location--v1.png" height = "35px">ExplorePal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="HomePage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    Additional Features
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class = "dropdown-item" href="#" data-toggle="modal" data-target="#PocketTranslator">Pocket Translator</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#MapModal">Map</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" title="Choose your personality" aria-haspopup="true" aria-expanded="true">
                Personality
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item PersonalityOption">Adventure Sports</a>
                    <a class="dropdown-item PersonalityOption">Business and Diplomacy</a>
                    <a class="dropdown-item PersonalityOption">Food</a>
                    <a class="dropdown-item PersonalityOption">History</a>
                    <a class="dropdown-item PersonalityOption">Mountaineering and Trekking</a>
                    <a class="dropdown-item PersonalityOption">Natural Scenary</a>
                    <a class="dropdown-item PersonalityOption">Religion and Culture</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item PersonalityOption">Others</a>
                </div>
            </li>
            <?php
                if($_SESSION['LoggedIn']){
                    echo "
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true' href='#'>
                                Profile
                                <!img src='https://img.icons8.com/cotton/64/000000/name--v2.png' title='Your profile' height = '30px'>      
                            </a>
                            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>    
                                <a class='dropdown-item' href='ExplorePalProfile.php'>Your profile</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='AuthenticateUser.php?logout=yes'>Logout</a>
                            </div>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>Notifications <span class='badge badge-secondary'>1</span></a>
                        </li>
                    ";
                }else{
                    echo "
                        <li class='nav-item'>
                            <a class='nav-link' href='#' tabindex='-1' aria-disabled='false' data-toggle='modal' data-target='#LoginForm'>Login</a>
                        </li>
                    ";
                }
                if($_SESSION['IsAdmin']){
                    echo "
                        <li class='nav-item'>
                            <a class='nav-link' href='ExplorePalSettings.php'>Settings</a>
                        </li>
                    ";   
                }
            ?>
            <li class='nav-item'>
                <a class='nav-link' href='ExplorePalHelp.php'>Help</span></a>
            </li>";
        </ul>&nbsp;
        <form class="form-inline my-2 my-lg-0" action="ExplorePalSearch.php">
            <input class="form-control mr-sm-2" type="search" name = "searchbox" placeholder="Search" aria-label="Search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name = "search">Search</button>
        </form>
    </div>
</nav>

<!-- Modals -->

<!-- Start of PocketTranslator modal -->

<div id="PocketTranslator" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pocket Translator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="TranslationTableBody">
                    <?php include('LoadPocketTranslator.php'); ?>
                </div>
                <button type="button" class="btn btn-info" id="LoadMoreTraslations">Load more</button>
            </div>
            <div class="modal-footer">
                <a href = "https://translate.google.com/#view=home&op=translate&sl=ne&tl=en" target = "_blank" class="btn btn-primary"> Load <u>Google Translate</u> instead</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- End of PocketTranslator modal -->

<!-- Start of Map modal -->

<div id="MapModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Contents here
            </div>
            <div class="modal-footer">
                <a href = "https://translate.google.com/#view=home&op=translate&sl=ne&tl=en" target = "_blank" class="btn btn-primary"> Use <u>Google Maps</u></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- End of PocketTranslator modal -->

<!-- Start of Login Form modal -->

<div id="LoginForm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" method = "post" action = "AuthenticateUser.php">
                    <div class="form-label-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name = "LoginEmail" required autofocus>
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name = "LoginPassword" required> 
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <br><label class="custom-control-label" for="customCheck1">Remember password</label><br>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" id="submit" type="submit" name = "loginSubmit">Sign in</button>
                </form>
                <button class="btn btn-lg btn-primary btn-block text-uppercase mt-1" id="create" type="submit" name = "createNewAccount" data-toggle="modal" data-target="#RegisterType" onclick="closeModal('#LoginForm')">Create a New Account</a></button>
            </div>
        </div>
    </div>
</div>

<!-- End of Login Form modal -->

<!-- Start of Register select modal -->

<div id="RegisterType" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose your account type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='ExplorePalTouristRegistrationForm.php'">Tourist</button>
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='ExplorePalServiceProviderRegistrationForm.php'">Service Provider</button>
            </div>
        </div>
    </div>
</div>

<!-- End of Register select modal -->

<!-- Start of log message -->

<div id="LogMessage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $logmessage; ?>
            </div>
        </div>
    </div>
</div>          

<!-- End of log message -->

<!-- End of overall navigation bar section -->

<!-- Start of admin panel -->

<!--?php
    //if($is_admin){
    //  echo "
            ";
    //}
-->

<!-- End of admin panel -->
