<html>

<head>
    <link rel="stylesheet" href=".././cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                    <a href="index.php"> <img src="../images/character.jpg" class="profile"></a>
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

    <div id="content" style="padding-left: 120px; padding-right: 120px;margin-top: 75px; ">


        <section id="work">
            <div class="work">

                <h1 id="header_1">Work Experience</h1>
                <br>

                <table id="table">
                    <tr>

                        <th>iOS Mobile <br>Developer</th>
                        <th>Back End Web Developer</th>
                        <th>Front End Web Developer</th>
                        <th>Electronics Intructor</th>

                    </tr>
                    <tr style="height: 10px;">
                        <td style="color: #2d758c;"><i class="fas fa-location-dot"></i> <b>Cardinal Health</b><br><br><i
                                class="fas fa-calendar-days"></i> <b>July 2023-August 2023</b>
                            <hr style="width: 90%;">
                        </td>
                        <td style="color: #2d758c;"><i class="fas fa-location-dot"></i> <b>Integrated Digital
                                System</b><br><br><i class="fas fa-calendar-days"></i> <b>May 2023 – July 2023</b>
                            <hr style="width: 90%;">
                        </td>
                        <td style="color: #2d758c;"><i class="fas fa-location-dot"></i> <b>Freelance</b> <br><br><i
                                class="fas fa-calendar-days"></i> <b>December 2022-March 2023</b>
                            <hr style="width: 90%;">
                        </td>
                        <td style="color: #2d758c;"><i class="fas fa-location-dot"></i> <b>The Makers Hub </b><br><br><i
                                class="fas fa-calendar-days"></i> <b>January 2022-April 2023</b>
                            <hr style="width: 90%;">
                        </td>

                    </tr>

                    <tr>
                        <td style="margin-right: 10px;">
                            <ul style="padding-inline-start: 10px;">
                                <li>Developed complete iOS application called "GatherNEat".</li>
                                <li>Learned version control using Git.</li>
                                <li>Integrated Firebase for real-time data synchronization, user authentication and
                                    database management.</li>
                                <li>Embraced agile development techniques.</li>
                                <li>Implemented automated UI Testing according to Quality Assurance Workflow</li>
                            </ul>


                        </td>
                        <td style="padding-left: 15px;">
                            <ul>
                                <li>Designed back-end application of Meeting Room Booking System</li>
                                <li>Built Database using SQL Server 2014 .</li>
                                <li>Developed Web APIs using .NET Core.</li>
                            </ul>
                        <td style="padding-left: 15px;">
                            <ul>
                                <li>Designed the front end of a home services website using HTML and CSS.</li>
                                <li>Participated in the planning and design of the website.</li>
                            </ul>
                        </td>

                        <td style="padding-left: 15px;">
                            <ul>
                                <li>Led 12 training sessions for students at "Kayany Middle School" in Beqaa.</li>
                                <li>Implemented different projects and ideas to help students practically apply the
                                    theories learned.</li>
                                <li>Conducted training for students about microcontrollers specifically Arduino and
                                    coding in C#.</li>
                                <li>Created presentations and assisted students in developing home automation
                                    systems using wood working, electronics, and other material.</li>
                            </ul>
                        </td>
                    </tr>

                </table>

                <div style="width: 40%;margin-left: 20px;  float: left ">
                    <h1 id="header_1">Skills</h1>
                    <br>
                    <ul class="skills-list">
                        <li>
                            <div class="skill" style="padding-top:8px ;">HTML</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 90%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skill">CSS</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 90%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skill">JavaScript</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 70%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skill">C#</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 90%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skill">Python</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 99%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skill">Swift</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill">Java</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 100%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skill">C</div>
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress" style="width: 40%;"></div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                <div style="width: 45%; margin-right: 20px;float: right;">

                    <h1 id="header_1">Projects</h1>
                    <br>
                    <ul class="project-list">

                        <div class="project-container">
                            <div class="project-name">"Oh, Wheelie!" Software Engineering Project</div>

                            <div class="language-buttons">
                                <button class="language-button">HTML</button>
                                <button class="language-button">CSS</button>
                                <button class="language-button">JavaScript</button>

                            </div>
                        </div>
                        </li>
                        <li>
                            <div class="project-container">
                                <div class="project-name"> Parallelizing Convolutional Neural Network for Digit
                                    Recognition</div>
                                <div class="language-buttons">
                                    <button class="language-button">Cuda C</button>
                                    <button class="language-button">OpenMP</button>
                                    <button class="language-button">MPI</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-container">
                                <div class="project-name">Pet Store Database</div>
                                <div class="language-buttons">
                                    <button class="language-button">Oracel SQL </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project-container">
                                <div class="project-name"> Automatic Pet Feeder</div>
                                <div class="language-buttons">
                                    <button class="language-button">Arduino</button>
                                </div>
                            </div>
                        </li>
                        <li>

                    </ul>
                </div>
            </div>
        </section>

    </div>
    </div>
</body>

</html>