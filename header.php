<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <link href="http://localhost/wordpress/wp-content/themes/thecoffee/css/main.css" rel="stylesheet" >
        
        <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Poller+One" rel="stylesheet"> 
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
		$(document).ready(function(){
		$('a[href^="#"]').on('click',function(e){
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		  //Scroll and show hash

		//$('html,bod').animate({
		//'scrollTop': $target.offset().top
		//}, 1000, 'swing' , function() {
		//window.location.hash = target;
		//});

		// Scroll and don't show hash
		  $('html,body').animate({
		  'scrollTop': $target.offset().top
		   }, 1000, 'swing');
		});
		});
       </script>
    </head>
     <body>
        <div class="container-fluid indexBG" id="first">
        <nav class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="#"><img src="images/logo.png" class="img-responsive"/></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="#first">HOME</a></li>
              <li><a href="#second">ABOUT</a></li>
              <li><a href="#third">PRODUCTS</a></li>
               <li><a href="#fourth">CONTACT</a></li>
              
            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
          <div class="container" >
              <div class="col-md-8 pad80">
                  <h1>Enjoy our coffee <br/>&nbsp;&nbsp;&nbsp;&nbsp;and live the day...</h1>
                  <br/>
                  <br/>
                  <br/>
                  <h4>A cup in hand
                    you know it's worth your while<br/>
                    let's sit and stay for a while<br/>
                    let minutes turn to moments
                  </h4>
                  <br/>
                  <button class="btn btn-warning ibtn"><span class="order">READ MORE</span></button>
              </div>
              <div class="col-md-4"></div>
          </div>
            
          
        </div><!--the first-->

