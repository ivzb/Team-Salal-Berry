<?php
	function my_header($title, $description, $keywords){

	

?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/favicon.png">
      <title>Salal Berry Team - Тemplate for Bootstrap</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />

   </head> 
   <body>
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
			<script src="js/fancybox.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="js/toggle.js"></script>
		
      <header>
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               <div class="container">
                  <div class="navbar-header">
                    <p><strong>green</strong>uni<span>&reg;</span></p>
                  </div>
                 
 <nav class="rows" >
 <div id="main-nav">
  <ul class="nav nav-tabs">
        
       
           <li><a title="news" href="news.php" role="">News</a></li>
            <li><a title="about" href="about.php" role="">About GreenUni</a></li>
            <li><a title="mission" href="mission.php" role="">Mission</a></li>
              <li><a title="funny" href="funny.php" role="">Fun</a></li>
               <li><a title="gallery" href="gallery.php" role="">Gallery</a></li>
                 <li><a title="cotacts" href="contacts.php" role="">Contacts</a></li>

        </ul>
</div>
</nav>


               <!--   <div class="navbar-collapse collapse">
                     <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                           <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">
                        Submit
                        </button>
                     </form>
                  </div> -->
               </div>
            </div>
       
      </header>
<?php
} // end my_header()

	function my_foother(){
?>		
      <footer>
         <div class="container">
            <p>
               &copy; Salal Berry Team 2014
            </p>
         </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
<?php 
	}
?>