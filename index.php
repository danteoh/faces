<?php require "directory.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Nulogy Anniversary</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../favicon.ico"> 

		<!--Styles-->
        <link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="css/reveal.css">
		
		<!--Modernizr-->
		<script type="text/javascript" src="js/modernizr.custom.26887.js"></script> 

		<!--Initialize Avgrund -->
		<script>
		function openDialog() {
		Avgrund.show( "#default-popup" );
		}

		function openJames() {
		Avgrund.show( "#james-popup" );
		}
		function closeDialog() {
		Avgrund.hide();
		}
		</script>


    </head>
    <body>
<div class="overlay"></div>
<?php foreach($people as $key => $person): ?>
<div id="modal_<?php echo $key?>" class="reveal-modal [expand, xlarge, large, medium, small]">
	<div style="width: 300px; float: left">
	  <h2><?php echo $person["name"]?></h2>
	  <p class="lead"><?php echo $person["team"]?></p>
	  <?php if($person["favourite"]): ?>
	  	<h3>Favourite part of Nulogy</h3>
	  	<p><?php echo $person["favourite"]?></p>
		<?php endif ?>
		<?php if($person["future"]): ?>
	  	<h3>Looking to the future</h3>
	  	<p><?php echo $person["future"]?></p>
	  <?php endif ?>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	<div class="float: right; width: 350px">
	  <img width=300 src="nulogy_anniversary/<?php echo $person["image"]?>.jpg"/>
	</div>
</div>
<?php endforeach ?>



		<img src="images/loading.gif" style="display:none;"/>

        <div class="container">
			
			<section class="main">

				<div id="responsive-grid" class="responsive-grid responsive-grid-size-3">
					<ul>
						<?php foreach($people as $key => $person): ?>
							<li><a <?php if($person["name"]):?>data-reveal-id="modal_<?php echo $key ?>"<?php endif ?>><img src="nulogy_anniversary/<?php echo $person["image"]?>.jpg"/></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			
			<div class="avgrund-cover"></div>

			<!--Modal details for each individual -->

		
				

			</section>
			
        </div>



<!--Scripts (image roatation, responsive grid, agrund modal) -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>


<!--Specify Responsive Grid Break Points -->

		<script type="text/javascript">	
			$(function() {
			
				$( '#responsive-grid' ).gridrotator( {
					rows		: 10,
					columns		: 5,
					maxStep		: 0,
					step      : 0,
					w1024		: {
						rows	: 20,
						columns	: 4
					},
					w768		: {
						rows	: 20,
						columns	: 3
					},
					w480		: {
						rows	: 20,
						columns	: 2
					},
					w320		: {
						rows	: 20,
						columns	: 1
					},
					w240		: {
						rows	: 20,
						columns	: 1
					},
				} );
			
			});
		</script>
    </body>
</html>