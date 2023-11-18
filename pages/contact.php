<html>

<head>
    <link rel="stylesheet" href=".././cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href ="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../pages/index.php");
    }

?>

</head>

<body style="background-image:url('../images/background.jpg'); background-color: #CCDADD; background-repeat: no-repeat;">
    <div>
        <div id="topNav">
            <div class="division">
                <div class="left-section">
                    <a href="index.php"> <img src="../images/character.jpg" class="profile"></a>                </div>
            </div>
            <div class="row" id="header">
                <div id="dropdown-menu">
                    <a href="index.php"><span>Nathalie El Ashkar</span></a>
                    <div class="dropdown-content">
                        <ul>
                            <a href="gallery.php">
                                <li> <i class="fas fa-images" style="padding-right: 5px;"></i>Gallery</li>
                            </a>
                            <a href="CV.php">
                                <li><i class="fas fa-id-badge" style="padding-right: 15px;"></i>Work</li>
                            </a>
                            <a href="contact.php">
                                <li><i class="fas fa-user" style="padding-right: 8px;"></i>Contact</li>
                            </a>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        if (isset($_SESSION["username"])) {
            echo '<span id ="userDiv">Welcome, ' . $_SESSION["fullname"] ;
            echo '<br><a href="../BE/logout.php" id = "logOut">Logout</a></span>';
        }
        ?>
        </div>


    </div>


    <div id="content" style="padding-left: 150px; padding-right: 150px;margin-top: 75px; ">
        <section id="contact">

            <h1 id="header_1" style="text-align: center;">Reach Out To Me</h1>
            <br>
            <div style ="text-align: center;">
                <img src =".././images/moi.jpg" style="border-radius: 50px; height: 200px; width: 200px;">
            </div>
            <div class="contact" style="margin-left: 20px;">
                <div class="div1">
                    <div class="content-div">
                        <p class="fas fa-envelope" style="font-size: 30px;padding-bottom: 7px;"></p><br>Email
                        <p><br>nathalie.elashkar@lau.edu</p>
                    </div>
                </div>
                <div class="div1">
                    <div class="content-div">
                        <p class="fas fa-location-dot" style="font-size: 30px;padding-bottom: 7px;"></p><br>Address
                        <p><br>Beirut, Lebanon</p>
                    </div>
                </div>
                <div class="div1">
                    <div class="content-div">
                        <p class="fas fa-phone" style="font-size: 30px;padding-bottom: 7px;"></p><br>Phone
                        <p><br>71 091 173</p>
                    </div>
                </div>

            </div>

            <div class="div-fifty-l">
                <div class="link-div" ><p class="fab fa-linkedin-in" style="font-size: 30px;padding-bottom: 7px;"></p><br>Linked In<br>
                    <p><br><a href="https://www.linkedin.com/in/nathalie-elashkar" target="_blank">www.linkedin.com/in/nathalie-elashkar</a></p>
                </div>
            </div>
            <div class="div-fifty-r">
                <div class="link-div"><p class="fab fa-github" style="font-size: 30px;padding-bottom: 6px;"></p><br>GitHub<br>
                    <p><br><a href="https://www.github.com/Nathalie-Ash" target="_blank">www.github.com/Nathalie-Ash</a></p>
                </div>
            </div>


    </div>
    </section>
    </div>
</body>

</html>