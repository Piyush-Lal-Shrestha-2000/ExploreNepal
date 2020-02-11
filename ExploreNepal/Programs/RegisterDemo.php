<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ExplorePal | RegisterPage Demo</title>
		
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
	 	<form action="#" method = "post" class = "mx-5">
			<div class="form-group">
		   		<label for="fullname">Full name:</label>
			    <input type="text" class="form-control" id="fullname">
		  	</div>
			<div class="form-group">
		   		<label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email">
		  	</div>
	  		<div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd">
		  	</div>
		  	<div class="form-group">
			    <label for="pwd">Gender:</label>
			    <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Male</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Female</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline3">Others</label>
</div>

		  	</div>
		  	<div class="checkbox">
			    <label><input type="checkbox"> I accept the <u>terms and conditions</u></label>
		  	</div>
			  	<button type="submit" class="btn btn-primary btn-sm btn-rounded">Submit</button>
		</form> 
	</body>
</html>