<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../pages/index.php");
    }

?>
<html>

<head>
    <link rel="stylesheet" href=".././cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body style="background-image:url('../images/background.jpg'); background-color: #CCDADD; background-repeat: no-repeat;">

    <div>
        <div id="topNav">
            <div class="division">
                <div class="left-section">
                    <a href="index.php"> <img src=".././images/character.jpg" class="profile"></a>
                </div>
            </div>
            <div class="row" id="header">
                <div id="dropdown-menu">
                    <a href="index.php"><span>Nathalie El Ashkar</span></a>
                    <div class="dropdown-content">
                        <ul>
                            <a href="gallery.php">
                                <li> <i class="fas fa-images" style="padding-right: 5px;"></i>Gallery</li>
                            </a>
                            <a href="cv.php">
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

    <div id="content" style="padding-left: 74px; padding-right: 74px; margin-top:200px">


        <section id="gallery">
            
            <!--div class="gallery" style="text-align: center;">
                
               <div class="image-container">
                    <img src=".././images/statue1.jpg" class="my-image" tabindex="0">
                    <img src=".././images/statue1.jpg" class="my-big-image" id="my-big-image1">
                </div>

                <div class="image-container">
                    <img src=".././images/statue2.jpg" class="my-image" tabindex="0">
                    <img src=".././images/statue2.jpg" class="my-big-image" id="my-big-image2">
                </div>

                <div class="image-container">
                    <img src=".././images/statue3.jpg" class="my-image" tabindex="0">
                    <img src=".././images/statue3.jpg" class="my-big-image" id="my-big-image3">
                </div>
            </div>-->
            <?php
                $jsonfile = '../js/gallery.json';
                $jsonimg = file_get_contents($jsonfile);
                $images = json_decode($jsonimg, true)['images'];
            ?>
    
                <div class="gallery" style="text-align: center;">
                    <?php for ($i = 0; $i < count($images); $i++): ?>
                        <div class="image-container">
                            <img src="<?= $images[$i]['url'] ?>" alt="<?= $images[$i]['alt'] ?>" class="my-image"  tabindex="0">
                            <img src="<?= $images[$i]['url'] ?>" alt="<?= $images[$i]['alt'] ?>" class="my-big-image" id="my-big-image<?= $images[$i]['id'] ?>">
                        </div>
                    <?php endfor; ?>
                </div>
        </section>
    </div>
    <!--script src="../js/gallery.js"></script>-->
</body>

</html>