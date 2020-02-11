<?php
	session_start();
	include"ExplorePalDatabaseConnection.php";
    include"DisplayPlaces.php";  			
	
	$logmessage = "Hello";
	function alertMsg($msg){
		echo "<script>	alert('".$msg."');	</script>";		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ExplorePal | Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel = "icon" href = "https://img.icons8.com/cotton/64/000000/worldwide-location--v1.png" type="image/icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="ExplorePalMainStyle.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<style>
		 	
	  	</style>

	  	<script language="javascript">
	  		function open(x){
	  			$(x).modal('show');
	  		}
	  		function closeModal(x){
	  			$(x+" .close").click();
	  			//document.getElementById(x).style.display = "none";
	  			//$(x).modal('toggle');
	  			//$(x).modal('hide');
	  			//document.getElementById(x).modal('toggle');	
	  		}
	  		$(document).ready(function(){
				var limit = 1;
				var disLim = 3;
				$("#LoadMoreTraslations").click(function(){
					limit = limit+1;
					$("#TranslationTableBody").load("LoadPocketTranslator.php",{
						newLimit: limit
					});
				});
				$('.PersonalityOption').click(function(){
              		//alert(this.innerHTML);
              		var sqlCode = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = '"+this.innerHTML+"' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
              		$("#ContentsPersonality").load("DisplayPlaces.php",{
						change: 'true',
						heading: this.innerHTML,
						sql: sqlCode
					}); 
            	});
            	$('.loadMoreContents').click(function(){
              		disLim = disLim + 3;
              		var sqlCode = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = '"+this.id+"' GROUP BY place_avg_rating DESC, place_id LIMIT "+disLim;
					$("#ContentsPersonality").load("DisplayPlaces.php",{
              			change: 'true',
						heading: this.id,
						sql: sqlCode
					}); 
            	});
			});
	  	</script>
	</head>
	<body>
		<header>
			<?php
				include "ExplorePalHeaderSection.php";
				include "ExplorePalHomePageCarousel.php";
			?>
			<!-- Navigation bar section -->

		</header>

	    <!-- Header section ends here -->
	  	
	  	<!-- Start of contents sections -->

	  	<!-- Start of Trending, Newly added -->

	  	<section>
	  		<section>
	  			<?php 
	  				$sql = "SELECT * FROM place_details GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Trending", $connection, $sql, false, "Trending");	
	  			?>	
	  		</section>
	  		<section>
		  		<?php
	      			$sql = "SELECT * FROM place_details GROUP BY place_id DESC, place_id LIMIT 3";
	      			displayData("New Additions", $connection, $sql, false, "New");
	      		?>
	      	</section>	
	  	</section>

	  	<!-- End of Trending, Newly added -->

	  	<!-- Start of personality based destinations showcasing -->

	  	<section id = 'ContentsPersonality'>
	  		<section id = 'AdventureSportsContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Adventure Sports' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Adventure Sports", $connection, $sql, true, "AdventureSportsContents");
	  			?>
	  		</section>
	  		<section id = 'BusinessAndDiplomacyContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Business and Diplomacy' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Business and Diplomacy", $connection, $sql, true, 'BusinessAndDiplomacyContents');
	  			?>
	  		</section>
	  		<section id = 'FoodContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Food' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Food", $connection, $sql, true, 'FoodContents');
	  			?>
	  		</section>
	  		<section id = 'HistoryContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'History' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("History", $connection, $sql, true, 'HistoryContents');
	  			?>
	  		</section>
	  		<section id = 'MountaineerinAandTrekkingContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Mountaineering and Trekking' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Mountaineering and Trekking", $connection, $sql, true, 'MountaineerinAandTrekkingContents');
	  			?>
	  		</section>
	  		<section id = 'NaturalScenaryContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Natural Scenary' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Natural Scenary", $connection, $sql, true, 'NaturalScenaryContents');
	  			?>
	  		</section>
	  		<section id = 'ReligionAndCultureContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Religion and Culture' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Religion and Culture", $connection, $sql, true, 'ReligionAndCultureContents');
	  			?>
	  		</section>
	  		<section id = 'OthersContents'>
	  			<?php
	  				$sql = "SELECT * FROM place_details NATURAL JOIN place_and_category NATURAL JOIN place_category WHERE place_category.place_category_name = 'Others' GROUP BY place_avg_rating DESC, place_id LIMIT 3";
      				displayData("Others", $connection, $sql, true, 'OthersContents');
	  			?>
	  		</section>
	  	</section>
	  	
	  	<!-- End of personality based destinations showcasing -->

	  	<!-- End of contents sections -->

		<!-- Footer -->
		
		<footer class="pt-5 pb-4" id="contact">
			<?php 
				include "ExplorePalHomePageFooter.php";	
			?>			
		</footer>
	
		<!-- Copyright -->
		
		<section class="copyright">
			<?php 
				include "ExplorePalHomePageCopyright.php";
			?>
		</section>
	</body>
</html>
