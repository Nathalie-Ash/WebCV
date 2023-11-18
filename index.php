<?php 
session_start();
session_unset();
session_destroy();
?>


<html>

<head>
    <link rel="stylesheet" href="cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body
    style="background-image:url('images/background.jpg'); background-color: #CCDADD; background-repeat: no-repeat;">
    <div>
    <div id="topNav"> 
        <div id="userProfileContainer">
            <img src="images/character.jpg" class="profile">
            <div class="row" id="header">
                <div id="dropdown-menu">
                        <i class="fas fa-bars" id="dropdown-menu"></i>
                    
                    <div class="dropdown-content">
                        <ul>
                            <a href="pages/gallery.php">
                                <li><i class="fas fa-images" style="padding-right: 5px;"></i>Gallery</li>
                            </a>
                            <a href="pages/CV.php">
                                <li><i class="fas fa-id-badge" style="padding-right: 15px;"></i>Work</li>
                            </a>
                            <a href="pages/contact.php">
                                <li><i class="fas fa-user" style="padding-right: 8px;"></i>Contact</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <span style= "font-size: 20px; padding-left: 10px;" >Nathalie El Ashkar</span>
        </div>
    </div>
</div>




    <div id="content" style="padding-left: 150px; padding-right: 150px;margin-top: 100px; ">


        <section id="work">
            <div class="work">
                <h1 id="header_1" style="text-align: center;">
                    Welcome to my Portfolio
                </h1>
               
                <div class="inn">
                    <form action = "BE/login.php" method = "POST" id="login-form">
                    <br>
                    <label id="user" for="user" > <b>Username</b></label>
                    <br>
                    <input style ="border-radius: 50px; border:solid 2px #062a3c;padding: 5px;" type="text" placeholder=" Enter Username" name="username" required>
                    <br><br>
                    <label style="margin: 10px;" id="password" for="password"> <b>Password</b></label>
                    <br>
                    <input style ="border-radius:  50px; border: solid 2px #062a3c;padding: 5px;" id="pass" type="password" placeholder=" Enter Password" name="password" required>
                    <br><br>
                    <input type="button" id="loginBtn" value ="Login" onclick ="login()">
                    <br>
                    <p style = "color:#062a3c "> Don't have an account? <a href="pages/signup.html">Sign Up</a></p>
                </div>
        
        
        </section>
    </div>


    <script>
    function login(){
        var un=document.getElementById("user").value;
        var pass=document.getElementById("pass").value;
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("user").value="";
        document.getElementById("pass").value="";
    }
</script>



</body>

</html>   

