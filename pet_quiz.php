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
          <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .quiz-container {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px 30px;
        max-width: 600px;
        margin: 50px auto;
    }

    .quiz-container h2 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        font-size: 1.8em;
    }

    .question h3 {
        color: #555;
        margin-bottom: 15px;
        font-size: 1.3em;
    }

    .options {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .option {
        background: #f0f0f0;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .option:hover {
        background: #e0e0e0;
    }

    .option.selected {
        background: #d4edda;
        border: 1px solid #28a745;
        font-weight: bold;
    }

    #result {
        text-align: center;
        padding: 20px;
    }

    #result h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: #333;
    }

    #match-result h4 {
        margin: 10px 0;
        font-size: 1.3em;
        color: #333;
    }

    #restart {
        background:rgb(46, 54, 64);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 15px;
    }

    #restart:hover {
        background: #0056b3;
    }
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

    </style>
</head>
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
<body>

    

    <div class="container quiz-container">
        <h2>Find Your Perfect Pet Companion</h2>
        <div id="quiz">
            <div class="question" id="question1">
                <h3>1. How active is your lifestyle?</h3>
                <div class="options">
                    <div class="option" data-score-dog="3" data-score-cat="1" data-score-bird="2">Very Active - Love Long Walks</div>
                    <div class="option" data-score-dog="2" data-score-cat="3" data-score-bird="1">Moderate - Some Exercise</div>
                    <div class="option" data-score-dog="1" data-score-cat="2" data-score-bird="3">Relaxed - Prefer Indoor Activities</div>
                    <div class="option" data-score-dog="0" data-score-cat="4" data-score-bird="0">Mostly Sedentary</div>
                </div>
            </div>

            <div class="question" id="question2" style="display:none;">
                <h3>2. How much space do you have?</h3>
                <div class="options">
                    <div class="option" data-score-dog="3" data-score-cat="2" data-score-bird="1">Large Home with Yard</div>
                    <div class="option" data-score-dog="2" data-score-cat="3" data-score-bird="2">Apartment or Small Space</div>
                    <div class="option" data-score-dog="1" data-score-cat="1" data-score-bird="3">Very Small Living Area</div>
                </div>
            </div>

            <div class="question" id="question3" style="display:none;">
                <h3>3. How much time can you dedicate daily?</h3>
                <div class="options">
                    <div class="option" data-score- dog="3" data-score-cat="1" data-score-bird="2">Several Hours Daily</div>
                    <div class="option" data-score-dog="2" data-score-cat="2" data-score-bird="1">1-2 Hours Daily</div>
                    <div class="option" data-score-dog="1" data-score-cat="3" data-score-bird="3">Limited Time</div>
                </div>
            </div>

            <div id="result" style="display:none;">
                <h3>Your Perfect Pet Match Is a</h3>
                <div id="match-result"></div>
                <button id="restart" class="btn">Take Quiz Again</button>
            </div>
        </div>
    </div>

    <script>
        const questions = document.querySelectorAll('.question');
        const options = document.querySelectorAll('.option');
        const resultSection = document.getElementById('result');
        const matchResult = document.getElementById('match-result');
        let currentQuestion = 0;
        let scores = { dog: 0, cat: 0, bird: 0 };

        options.forEach(option => {
            option.addEventListener('click', function() {
                this.closest('.question').querySelectorAll('.option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');

                scores.dog += parseInt(this.getAttribute('data-score-dog') || 0);
                scores.cat += parseInt(this.getAttribute('data-score-cat') || 0);
                scores.bird += parseInt(this.getAttribute('data-score-bird') || 0);

                setTimeout(() => {
                    if (currentQuestion < questions.length - 1) {
                        questions[currentQuestion].style.display = 'none';
                        currentQuestion++;
                        questions[currentQuestion].style.display = 'block';
                    } else {
                        determineMatch();
                    }
                }, 300);
            });
        });

        function determineMatch() {
            questions[currentQuestion].style.display = 'none';
            resultSection.style.display = 'block';

            const maxScore = Math.max(scores.dog, scores.cat, scores.bird);
            let match = '';

            if (scores.dog === maxScore) {
                match = `
                    <h4> A Dog 🐶  !</h4>
                    <p>🏃‍♀️‍➡️You're an active person who loves companionship and outdoor activities. A dog would be your ideal pet🏃!</p>
                `;
            } else if (scores.cat === maxScore) {
                match = `
                    <h4>A Cat 🐱 !</h4>
                    <p>You appreciate independence and calm environments. A cat would be your perfect companion!😁</p>
                `;
            } else {
                match = `
                    <h4>Bird 🦜 or Hamster 🐹 !</h4>
                    <p>You enjoy intelligent, low-maintenance pets with personality. A bird or hamster would be a great addition to your home!🧐</p>
                `;
            }

            matchResult.innerHTML = match;
        }

        document.getElementById('restart').addEventListener('click', () => {
            currentQuestion = 0;
            scores = { dog: 0, cat: 0, bird: 0 };
            resultSection.style.display = 'none';
            questions.forEach((q, index) => {
                q.style.display = index === 0 ? 'block' : 'none';
            });
            options.forEach(opt => opt.classList.remove('selected'));
        });
    </script>
</body>
</html>
