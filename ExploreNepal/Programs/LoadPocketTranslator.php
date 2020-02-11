<head>
	<title>Load Translator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<script>
	//Make only one audio play at a time.
	var isPlaying = false;
	document.addEventListener('play', function(e){
	    var audios = document.getElementsByTagName('audio');
	    for(var i = 0, len = audios.length; i < len;i++){
	        if(audios[i] != e.target){
	            audios[i].pause();
	        }
	    }
	}, true);
	function playPause(id){
		var audio = document.getElementById(id);
		if(isPlaying)
			audio.pause();	
		else	
			audio.play();
		isPlaying = !isPlaying;
	}
	
</script>
<?php
	include("ExplorePalDatabaseConnection.php");
	$limit = 1;
	if(isset($_POST['newLimit']))
		$limit = $_POST['newLimit'];
	$sql = "SELECT * FROM pocket_translator LIMIT ".$limit;
	$R = mysqli_query($connection, $sql);
	if(mysqli_num_rows($R)>0){
		echo "
			<table class = 'table table-hover table-dark'>
		      	<thead>
    				<tr>
      					<th scope='col'>#</th>
      					<th scope='col'>Speech</th>
      					<th scope='col'>Translation</th>
      					<th scope='col'>Audio</th>
    				</tr>
  				</thead>
  				<tbody>
  		";
		while($row = mysqli_fetch_assoc($R)){
			$aid = "Audio".$row['pocket_translator_id'];
			//$onclick = "document.getElementById('".$aid."').play()";
			$onclick = "playPause('".$aid."')";
			echo "
				<audio id ='".$aid."' src = '".$row['pocket_translator_audio']."'></audio>
				<tr>
					<th scope = 'row'>".$row['pocket_translator_id']."</th>
					<td>".$row['pocket_translator_speech']."</td>
					<td>".$row['pocket_translator_translation']."</td>
					<td>
						<button type='button' class='btn btn-dark' onclick=".$onclick."><i class='fa fa-play' aria-hidden='true'></i></button>						
					</td>
				</tr>
			";
		}
		echo "
				</tbody>
			</table>
		";
	}else{
		echo "<h1>Nothing to display</h1>";
	}
?>