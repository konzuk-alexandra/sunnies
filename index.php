<?php 
include "./stock/data-resource.php";
include "./web-service/brain.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Store</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
       <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque:500|Playfair+Display:900i&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
           <nav class="navbar navbar-expand-lg navbar-dark">
               <h2 class="navbar-brand">Sunnies<span>.com</span></h2>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="./index.php?prod-id=womens">womens</a>
                                      <a class="dropdown-item" href="./index.php?prod-id=mens">mens</a>
                                      <a class="dropdown-item" href="./index.php?prod-id=kids">kids</a>
                                </div>
                          </li>
                    </ul>
              </div>
            </nav>
        </header>
        <div class="masthead">
            <p></p>
        </div>
        <main>
           <h3> Shop Our Styles:</h3>
           <hr>
            <?php
                if(isset($markUp)){
                    echo $markUp;
                }
            ?>
        </main>
        <div class="row">
			<nav class="navbar fixed-bottom navbar-expand-md navbar-dark" id="footer">
                <a href="#" id="socials"><i class="fab fa-facebook"></i></a>
                <a href="#" id="socials"><i class="fab fa-instagram"></i></a>
                <a href="#" id="socials"><i class="fab fa-twitter"></i></a>
	     		<span class="navbar-text ml-auto" id="brand"> &copy Sunnies.com </span>	
			</nav>
		</div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>