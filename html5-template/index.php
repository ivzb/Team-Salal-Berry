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
               <h1>Mission</h1>
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
                  <h2>Terms of Admission</h2>
                  <p>
                     Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                  </p>
                   <img src="images/green-uni-terms.png" width="362"  height="363" alt="GreenUni Terms">
                  <p>
                     <a class="btn btn-default toggle" href="#" role="button">View details &raquo;</a>
                  </p>
               </div>
                <div class="col-md-4">
                    <h2>GO Green with Salal Berry Team </h2>
                    <p>
                        Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </p>
                    <img src="images/salal-berry-team.png" width="362"  height="363" alt="GreenUni vision">
                    <p>
                       <a class="btn btn-default toggle" href="#" role="button">View details &raquo;</a>
                  </p>
                </div>
               <div class="col-md-4">
                  <h2>GreenUni Mission</h2>
                  <p>
                     Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                  </p>
                   <img src="images/green-uni-mission.png" width="362"  height="363" alt="GreenUni mission">
                  <p>
                     <a class="btn btn-default toggle" href="#" role="button">View details &raquo;</a>
                  </p>
               </div>
            </div>
            <hr>
         </div>
      </section>
<?php 
my_foother();
?>      