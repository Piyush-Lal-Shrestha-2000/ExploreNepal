<?php 
	session_start();
	if(!isset($_SESSION['search_title']))
 		$_SESSION['search_title'] = 'TestTitle';
	include"ExplorePalDatabaseConnection.php";
    include"DisplayPlaces.php";  		
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ExplorePal | Search | <?php echo $_SESSION['search_title'] ?> </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel = "icon" href = "https://img.icons8.com/cotton/64/000000/worldwide-location--v1.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="ExplorePalMainStyle.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<?php include('ExplorePalHeaderSection.php'); ?>
		</header>

		<section>
			<?php 
				if(isset($_GET['type']) && isset($_GET['obj'])){
					$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = '".$_GET['content']."' GROUP BY place_avg_rating DESC, place_id";
					displaySingleLocation($ContentHeading, $connection, $sql, $disMore, $DisplayLocation);
				}if(isset($_POST['search'])){
					echo "HERE";
					$search = $_POST['searchbox'];
					$sql = (strlen($search)<3)?"SELECT * FROM place_category WHERE place_name LIKE '$search%'":"SELECT * FROM place_category WHERE place_name LIKE '%$search%'";
					 displayData($search, $connection, $sql, false, $search);
				}
				if(isset($_GET['content'])){
					$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = '".$_GET['content']."' GROUP BY place_avg_rating DESC, place_id";
	      			displayData($_GET['content'], $connection, $sql, false, $_GET['content']);
				}
			?>
		</section>

		<footer class="pt-5 pb-4" id="contact">
			<?php include "ExplorePalHomePageFooter.php"; ?>			
		</footer>
		<section class="copyright">
			<?php include "ExplorePalHomePageCopyright.php"; ?>
		</section>
	</body>
</html>
