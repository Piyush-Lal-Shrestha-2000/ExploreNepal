<?php
  include "ExplorePalDatabaseConnection.php";
  function displayData($ContentHeading, $connection, $sql, $disMore, $DisplayLocation){
    $R = mysqli_query($connection, $sql);
    $_SESSION['search_title'] = $ContentHeading;
    echo "
      <div class = 'jumbotron '>
          <h2 class = 'mb-5 ml-5'>
    ";
    if($disMore){
      echo "
        <a href = 'ExplorePalSearch.php?content=$ContentHeading'
      ";
    }else{
      echo "
        <a href = '#'
      ";
    }      
    echo "
      id ='editHover'>".$ContentHeading."</a></h2>
      <div class='row row-cols-1 row-cols-md-3 mx-5'>
    ";
    $temp = "";
    while($r = mysqli_fetch_array($R)){
      $modalID = str_replace(" ", "", $r['place_id'].$r['place_name']);
      $func = "ExplorePalSearch.php?type=readmore&obj=".$r['place_name'];
      echo "
        <div class='col mb-4'>
          <div class='card mb-4 h-100'>
            <div class='view overlay'>
              <img class='card-img-top' src='".$r['place_main_photo']."' height = '250px' width = '400px' alt='".$r['place_name']." image here'>
              <a href='#'>
                <div class='mask rgba-white-slight'></div>
              </a>
            </div>
            <div class='card-body'>
              <h4 class='card-title'>".$r['place_name']."</h4>
              <p class='card-text text-justify' >".str_replace("  ", " ", substr($r['place_details'], 0, 150))."</p>
              <a class = 'btn btn-light-blue btn-md' href ='Test.php'>Read more</a>
            </div>
          </div>
        </div>
      ";
      if(isset($r['place_category_name']))
        @$temp = $r['place_category_name'];
    }    
    echo "</div>";
    if($disMore)
      echo "<center><button type = 'button' class='btn btn-dark btn-md loadMoreContents' id = '".$temp."' >Load more</button></center>";
    echo "</div>";
  }
  function displaySingleLocation($ContentHeading, $connection, $sql, $disMore, $DisplayLocation){
    
  }
  if(isset($_POST['change'])){
    displayData($_POST['heading'], $connection, $_POST['sql'], true, "ALL");
  }//else{echo "Nothing to display.";}
?>
