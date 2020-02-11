<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <title>Hello, world!</title>
    <style>
        #editHover:hover{
          color:blue;
          text-decoration: none;
          transition: 0.8s;
          font-size: 35px;
        }
        div.stars{
  //width: 270px;
  display: inline-block;
}
 
input.star{
  display: none;
}
 
label.star {
  float: right;
  padding: 5px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
 
input.star:checked ~ label.star:before {
  content:'\f005';
  color: #FD4;
  transition: all .25s;
}
 
 
input.star-5:checked ~ label.star:before {
  color:#FE7;
  text-shadow: 0 0 20px #952;
}
 
input.star-1:checked ~ label.star:before {
  color: #F62;
}
 
label.star:hover{
  transform: rotate(-15deg) scale(1.3);
}
 
label.star:before{
  content:'\f006';
  font-family: FontAwesome;
}
 
.rev-box{
  overflow: hidden;
  height: 0;
  width: 100%;
  transition: all .25s;
}
 
textarea.review{
  background: #222;
  border: none;
  width: 100%;
  max-width: 100%;
  height: 100px;
  padding: 10px;
  box-sizing: border-box;
  color: #EEE;
}
 
label.review{
  display: block;
  transition:opacity .25s;
}
 
input.star:checked ~ .rev-box{
  height: 125px;
  overflow: visible;
}
    </style>
  </head>
  <body>
    <a href = "HomePage.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the home page</a>
    <div class = "container my-5">
      <table class="table table-info table-striped">
        <thead>
          <tr>
            <th rowspan="2"><img src= "../PlaceImages/illam.jpg" height="300px" width = "300px"></th>
            <th>
              <h1>PLACE NAME</h1>
              <p>Price range</p>
              <p>Address</p>
              <form action="" method="POST" id="commentform">
                <div class="stars">
                  <input class="star star-5" id="star-5" type="radio" name="star" value = "5" />
                  <label class="star star-5" for="star-5"></label>
                  <input class="star star-4" id="star-4" type="radio" name="star" value = "4"/>
                  <label class="star star-4" for="star-4"></label>
                  <input class="star star-3" id="star-3" type="radio" name="star" value = "3"/>
                  <label class="star star-3" for="star-3"></label>
                  <input class="star star-2" id="star-2" type="radio" name="star" value = "2"/>
                  <label class="star star-2" for="star-2"></label>
                  <input class="star star-1" id="star-1" type="radio" name="star" value = "1" checked/>
                  <label class="star star-1" for="star-1"></label>
                </div>  
              </form>
            </th>
          </tr>
          <tr>
            <td>
                <button type = "button" data-toggle='modal' class='btn btn-primary mx-2' data-target='#RateAndReview'>Rate and Review</button>
            </td>
          </tr>
        </thead>
        <tbody>    
          <tr>
            <td colspan="2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14164.957866246285!2d85.00818639993663!3d27.43064683631747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1581388322718!5m2!1sen!2snp" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </td>
          </tr>
          <tr class = 'table-dark'>
            <td colspan="2">
              <h3>PLACE DETAILS</h3>
              <p>Place details</p>
            </td> 
          </tr>
          <tr colspan = "2">
            <table class = 'table '>
              <h3>Service Providers</h3>
              <tr>
                <th>#</th>
                <th>Company type</th>
                <th>Name</th>
                <th>Company</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Message</th>
              </tr>
            </table>
          </tr>
        </tbody>  
        
      </table>  
    </div>

    <div id="RateAndReview" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Rate & Review</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action=""  method="POST" id="commentform">
              <div class="stars" class="mx-5 ml-5">
                <input class="star star-5" id="star-5" type="radio" name="star" value = "5" />
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star" value = "4"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star" value = "3"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star" value = "2"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star" value = "1" checked/>
                <label class="star star-1" for="star-1"></label>
              </div>  
              <div id="comment-message" class="form-row">
                <textarea class="form-control mx-5" name = "comment" placeholder = "Message" id = "comment" ></textarea>
              </div>
                <a href="#"><input class="mx-5" type="submit" name="dsubmit" id="commentSubmit" value="Submit Comment"></a>         
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
