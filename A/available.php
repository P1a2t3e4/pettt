<?php     
session_start();      
if (!isset($_SESSION['username'])){  
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head>     
    <meta charset="utf-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <meta name="description" >     
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
                width: 100%;
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
	
    
<!--*********************************************START OF Availables************************************************-->

<section id="tour-packages" class="center wow fadeInDown">
    <div style="font-size:30px; font-family:verdana; font-weight:bold; color:rgb(89, 89, 61); text-align:center;">OUR PETS ❤️ </div>
        <p style="text-align:center; font-family:verdana;"><br></p>

        <div class="container" style="height:600px;">
			<iframe src="availableframe.php" width="100%;" height="800px;" style="border-style:none;"></iframe>

            </div>
        </div>       
    </section>

<!--*************************************************** FOOTERS **********************************************-->
<?php include('includes/footer.php');?>
<!----------loginModal----------->
<?php include('loginModal.php')?>
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