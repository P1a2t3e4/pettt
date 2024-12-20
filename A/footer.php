<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Ensure the body takes up full height of the page */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Body uses flexbox to push footer to the bottom */
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
        }

        /* Footer styles */
        #footer {
            background-color:rgb(69, 69, 69); /* Adjust to your preferred color */
            color: white; /* Change text color as needed */
            padding: 20px 0; /* Adjust padding as needed */
            text-align: center;
            width: 100%;
            margin-top: auto; /* Push footer to the bottom */
        }

        #footer a {
            color: white; /* Footer links color */
            text-decoration: none;
        }

        #footer a:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments for smaller screens */
        @media screen and (max-width: 768px) {
            .pull-right {
                text-align: center;
            }

            .pull-right ul {
                padding-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Main Content Goes Here -->

    <!-- Footer Section -->
    <footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    &copy; 2023 <a target="_blank" href="#" title="#">Asantewaa's Pet Adoption System</a>. Always here to help.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                        <li class="wow fadeInDown"><a href="#loginModal"" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

</body>
</html>
