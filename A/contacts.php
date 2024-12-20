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
       /* Global Styles */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f4f4f4;
}

/* Container Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Contact Section Enhancements */
.contact-section {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 40px 20px;
    margin-top: 30px;
}

.contact-header {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-weight: 600;
    position: relative;
}

.contact-header::after {
    content: '';
    display: block;
    width: 70px;
    height: 3px;
    background-color: #e74c3c;
    margin: 10px auto 0;
}

.contact-details, .contact-hours {
    background-color: #f9f9f9;
    border-left: 4px solid #e74c3c;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.contact-details h3 {
    margin-bottom: 15px;
    color: #e74c3c;
}

.contact-details p, .contact-hours p {
    margin-bottom: 10px;
}

/* Social Icons Styling */
.social-icons {
    text-align: center;
    margin-top: 30px;
}

.social-icons a {
    color: #333;
    font-size: 30px;
    margin: 0 15px;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #e74c3c;
    text-decoration: none;
}

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
}

/* Additional Subtle Animations */
.contact-details, .contact-hours {
    transition: transform 0.3s ease;
}

.contact-details:hover, .contact-hours:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(171, 159, 159, 0.1);
}

/* Accessibility and Print Styles */
@media print {
    body {
        background-color: #fff;
    }

    .contact-section {
        box-shadow: none;
        border: 1px solid #ccc;
    }
}

/* Focus and Accessibility */
a:focus, button:focus {
    outline: 2px solid #e74c3c;
    outline-offset: 2px;
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
    
    <div class="container contact-section">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 contact-info">
                <h2 class="contact-header">Want to Reach Us?</h2>
                
                <div class="contact-details">
                    <h3 style="color: #e74c3c;">Asantewaa ❤️</h3>
                    <p><strong>Address:</strong> 1 University Ave, Berekuso</p>
                    <p><strong>Phone:</strong> +233256765656 / +233558748372</p>
                    <p><strong>Email:</strong> asantewaa@gmail.com</p>
                </div>

                <div class="contact-hours">
                    <h4 style="color: #9b59b6;">Our Hours</h4>
                    <p><strong>MONDAY TO FRIDAY</strong> -- 8:00AM - 5:00PM</p>
                </div>

                <div class="social-icons" style="color: rgb(73, 69, 68);">
    <a href="http://www.facebook.com" target="_blank" style="color:rgb(81, 82, 85);">
        <i class="fa fa-facebook-square"></i>
    </a>
    <a href="http://www.instagram.com" target="_blank" style="color:rgb(89, 84, 86);">
        <i class="fa fa-instagram"></i>
    </a>
    <a href="http://www.twitter.com" target="_blank" style="color:rgb(81, 90, 96);">
        <i class="fa fa-twitter-square"></i>
    </a>
    <a href="http://www.youtube.com" target="_blank" style="color:rgb(83, 76, 76);">
        <i class="fa fa-youtube-play"></i>
    </a>
</div>

            </div>
            
        </div>
        
    </div>
    <?php include('footer.php'); ?>

    <?php include('includes/footer.php');?>
    <?php include('loginModal.php')?>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php 
} else if(isset($_SESSION['username'])) { 
    include('includes/admin.php');
} 
?>