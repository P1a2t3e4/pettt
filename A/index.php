<?php     
session_start();      
if (!isset($_SESSION['username'])){  
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head>     
    <meta charset="utf-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <meta name="description" content="Furry Friends Pet Adoption">     
    <meta name="author" content="Your Name">     
    <link href="image/logo/logo1.png" rel="icon" type="image/png">     
    <title> PawMatch ❤️ </title> 
    
    <!-- Streamlined CSS Links -->
    <link href="css/bootstrap.min.css" rel="stylesheet">     
    <link href="css/font-awesome.min.css" rel="stylesheet">     
    <link href="css/animate.min.css" rel="stylesheet">     
    <link href="css/prettyPhoto.css" rel="stylesheet">       
    <link href="css/main.css" rel="stylesheet">     
    <link href="css/responsive.css" rel="stylesheet">  

    <style>
        /* Responsive Navbar Fixes */
        @media (max-width: 768px) {
            .navbar-header {
                width: 300%;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .navbar-toggle {
                float: right;
                margin-right: 15px;
            }
        }

        .navbar-inverse {
            background-color: #333;
            border-color: #222;
        }

        .navbar-nav > li {
            margin: 0 10px;
        }
    </style>
</head>

<body>                  
    <nav class="navbar navbar-inverse" role="banner">             
        <div class="container">                 
            <div class="navbar-header">                    
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                        
                    <span class="sr-only">Toggle navigation</span>                        
                    <span class="icon-bar"></span>                        
                    <span class="icon-bar"></span>                        
                    <span class="icon-bar"></span>                    
                </button>                    
                <a href="index.php" class="navbar-brand">     
                    <img src="image/logo/logo1.png" width="50" alt="Furry Friends Logo" class="img-responsive" style="display: inline-block; vertical-align: middle; margin-right: 10px;" />         
                    PawMatch ❤️     
                </a>                 
            </div>                      
            <div class="collapse navbar-collapse navbar-right">                    
                <ul class="nav navbar-nav">                          
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>                         
                    <li><a href="about-us.php">About Us</a></li>                         
                    <li><a href="available.php">Available Pets</a></li> 
                    <li><a href="pet_quiz.php">Pet Quiz</a></li>                           
                    <li><a href="contacts.php">Talk To Us</a></li>                                                                                  
                </ul>                 
            </div>             
        </div>         
    </nav>
    
<!-- Main Content Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="image/logo/pet6.jpg" alt="Pet Adoption" class="img-responsive carousel-image">
                    </div>
                    <div class="item">
                        <img src="image/logo/pet1.jpeg" alt="Pet 1" class="img-responsive carousel-image">
                    </div>
                    <div class="item">
                        <img src="image/logo/pet2.jpg" alt="Pet 2" class="img-responsive carousel-image">
                    </div>
                    <div class="item">
                        <img src="image/logo/pet5.jpeg" alt="Pet" class="img-responsive carousel-image">
                    </div>
                </div>
                
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-body">
            🥳 Welcome to PawMatch on <i class="glyphicon glyphicon-calendar"></i> 
            <?php echo date('M d, Y'); ?>
        </div>
        <div class="panel-body">
            <p>Adopting a pet can change a life! Browse through our available pets and find your new companion today.</p>
            <p>Wondering what pet to adopt? 🧐 Don't worry, we've got you! Take our personal quiz, which will advise you on what pet to adopt based on your habits.</p>
            <a href="available.php" class="btn btn-success btn-sm" style="margin-right: 90px;">View Pets</a>
            <a href="pet_quiz.php" class="btn btn-success btn-sm">Take Quiz</a>
        </div>
    </div>



            <div class="panel panel-default">
                <div class="panel-heading">Our Location</div>
                <div class="panel-body">
                    <p>Come visit us at our pet adoption center and meet our adorable pets in person!</p>
                    <address>
    <strong>Pet Adoption Center</strong><br>
    No. 10 Kwame Nkrumah Avenue<br>
    Accra, Greater Accra Region, Ghana<br>
    P.O. Box CT 1234<br>
                     </address>
      </div>
            
           

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal (Login) -->


<!-- Footer Included -->
<?php include('footer.php'); ?>


<!-- CSS for Image Sizing -->
<style>
    .carousel-inner .item img.carousel-image {
        width: 100%;  /* Ensures images stretch across the entire carousel */
        height: 600px; /* Standardizes the height of the images */
        object-fit: cover; /* Ensures the images are cropped to fit the container without stretching */
    }

    .panel-heading {
        padding-top: 20px;  /* Adjusts the space at the top of the panel heading */
    }

    .panel-body {
        margin-top: 0px;  /* Adds space between the heading and the body */
    }

    /* Adjust the margin for the main content section */
    .container-fluid {
        margin-top: 80px; /* Adjust this value as needed to move the content further down */
    }

   
</style>
<?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>
