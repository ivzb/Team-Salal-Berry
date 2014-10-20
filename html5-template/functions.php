<?php
	function my_header($title, $description, $keywords){

	

?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="<?php echo $description ?>">
      <meta name="keywords" content="<?php echo $keywords ?>">
      <meta name="author" content="Salel Berry Team">
      <link rel="icon" href="images/favicon.png">
      <title><?php echo $title ?></title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
   </head> 
   <body>
     
       
      <header>

            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               <div class="container">
                  <div class="navbar-header">
                  
                  </div>
                 
 <nav class="rows" >
 <div id="main-nav">
  <ul class="nav nav-tabs">
        
       
           <li><a title="news" href="/news/" role="">News</a></li>
            <li><a title="about" href="/about/" role="">About GreenUni</a></li>
            <li><a title="mission" href="/mission/" role="">Mission</a></li>
              <li><a title="funny" href="/funny/" role="">Fun</a></li>
               <li><a title="gallery" href="/gallery/" role="">Gallery</a></li>
                 <li><a title="cotacts" href="/" role="">Contacts</a></li>

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