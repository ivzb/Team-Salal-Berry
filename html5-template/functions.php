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
        
       
           <li><a title="news" href="news.php" role="">Новини</a></li>
           <li> 

             <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                Университетът
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="about.php">За нас</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="apply.php">Кандидатстване</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="hostel.php">Общежития</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="staff.php">Състав</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gallery.php">Галерия</a></li>
              </ul>
            </div>
           </li>
            <li><a title="mission" href="majors.php" role="">Специалности</a></li>
              <li><a title="funny" href="initiatives.php" role="">Инициативи</a></li>
               <li><a title="gallery" href="science.php" role="">Наука</a></li>
                 <li><a title="cotacts" href="contacts.php" role="">Контакти</a></li>

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