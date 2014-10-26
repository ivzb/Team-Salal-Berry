<?php
include 'functions.php';
$title = "Welcome to GreenUni ..";
$description = "";
$keywords = "";

my_header($title, $description, $keywords);
?>
      <section>
         <div class="jumbotron">
            <div class="container">
                <a  href="/"> <img class="logo" src="images/green-uni.png" width="300" height="164" alt="Team Logo"></a>
               <h1>Gallery</h1>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                </p>
                <p>
                  <a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
               </p>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h2>Heading</h2>
                  	<div class="gallery-img">
                  		<img src="images/jumbotron-background.png" /> <!-- normal img -->
                  		<img class="fancybox" src="images/jumbotron-background.png" /> <!-- js gallery image -->
                  		<img class="fancybox" src="images/jumbotron-background.png" title="image title" /> <!-- js gallery image & title -->
                  	</div>
                  <p>
                     Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                  </p>
                  
               </div>
               <div class="col-md-4">
                  <h2>Heading</h2>
                  <p>
                     Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                  </p>
                  <p>
                     <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
                  </p>
               </div>
               <div class="col-md-4">
                  <h2>Heading</h2>
                  <p>
                     Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                  </p>
                  <p>
                     <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
                  </p>
               </div>
            </div>
            <hr>
         </div>
      </section>
<?php 
my_foother();
?>      