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

        /* Custom Animations and Styling */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        .about-section {
            background: linear-gradient(135deg, #f5f7fa 0%,rgb(82, 83, 84) 100%);
            padding: 80px 0;
            font-family: 'Poppins', sans-serif;
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .about-text {
            flex: 1;
            padding-right: 50px;
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        .about-text.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .about-text h2 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .about-text h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: #ff6b6b;
        }

        .mission-vision {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .mission, .vision {
            flex: 1;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .mission:hover, .vision:hover {
            transform: scale(1.05);
        }

        .mission h3, .vision h3 {
            color: #ff6b6b;
            margin-bottom: 15px;
        }

        .map-container {
            width: 100%;
            margin-top: 50px;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .map-container.animate {
            opacity: 1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
            }

            .about-text {
                padding-right: 0;
                text-align: center;
            }

            .mission-vision {
                flex-direction: column;
            }

            .mission, .vision {
                margin-bottom: 20px;
            }
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
                    <img src="image/logo/logo1.png" width="50" alt="PawMatch Logo" class="img-responsive" style="display: inline-block; vertical-align: middle; margin-right: 10px;" />         
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

    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h2>About PawMatch Ghana</h2>
                <p>PawMatch is a passionate pet adoption center dedicated to connecting loving animals with caring families across Ghana. Founded with a mission to provide hope and homes for abandoned and rescued pets, we believe every animal deserves a second chance at happiness.</p>
                
                <div class="mission-vision">
                    <div class="mission">
                        <h3>Our Mission</h3>
                        <p>To create a compassionate community that supports animal welfare, provides quality care for rescued pets, and facilitates meaningful adoptions that transform both animal and human lives.</p>
                    </div>
                    <div class="vision">
                        <h3>Our Vision</h3>
                        <p>To be the leading animal welfare organization in Ghana, creating a national culture of responsible pet ownership, rescue, and adoption.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-container">
            <iframe 
                height="400" 
                frameborder="0" 
                style="width: 100%;" 
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3657.4999842594907!2d87.28130007527388!3d23.55047997880737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDMzJzAxLjciTiA4N8KwMTcnMDIuMCJF!5e0!3m2!1sen!2sin!4v1689862157107!5m2!1sen!2sin">
            </iframe>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
        // Simple scroll-based animations
        document.addEventListener('DOMContentLoaded', function() {
            const aboutText = document.querySelector('.about-text');
            const mapContainer = document.querySelector('.map-container');

            function checkScroll() {
                const triggerBottom = window.innerHeight / 5 * 4;
                
                const aboutTextPosition = aboutText.getBoundingClientRect().top;
                const mapPosition = mapContainer.getBoundingClientRect().top;

                if (aboutTextPosition < triggerBottom) {
                    aboutText.classList.add('animate');
                }

                if (mapPosition < triggerBottom) {
                    mapContainer.classList.add('animate');
                }
            }

            window.addEventListener('scroll', checkScroll);
            checkScroll(); // Initial check
        });
    </script>
</body>

</html>