<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="row vh-100">
	  <div class="col-1 bg-black">
	    <h2>My Cats</h2>
		<br>
		<a href="#" class="btn btn-black">Home</a>
		<br>
		<a href="contact.html" class="btn btn-black text-white" >Contact Us</a>
		<br>
		<button type="button" class="btn btn-black text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook-official"></i></button>
		<button type="button" class="btn btn-black text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Reddit"><i class="fa fa-reddit"></i></button>
	  </div>
	  
	  
	  
	  <!--GALLERY-->
	  <div class="col-11 bg-dark text-white">
	      <div class="row">
	      <?php
	  	  $count = 0;
          $dirname = "./imgs/";
          $images = glob($dirname."*.jpg");
		  $arrcount = intdiv(count($images),3);
		  echo '<div class="col-3">';
          foreach($images as $image) {
			  if($count < $arrcount){
				  $count = $count+1;
			  }
			  else
			  {
				  echo '</div>';
				  echo '<div class="col-3">';
				  $count = 0;
				  
			  }
			  echo '<a href="#" class ="pop">';
			  echo '<img src="'.$image.'" class="img-fluid rounded mx-auto d-block" /> </a> <br>';
          }
		  echo '</div>';
          ?>
		  </div>
	  </div>
  </div>
    
  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">              
        <div class="modal-body">
          <img src="" class="imagepreview" style="width: 100%;"/>
        </div>
      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script>
	$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
	});
	</script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>