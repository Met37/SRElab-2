<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/test.css">

</head>

<body>

    <!-- <section>
        <div style="color: aqua ;">ssss</div>

        <p>aasada</p>
    </section>

    <p style>helllooooo</p> -->

    <!-- <p style="position: absolute; top:50%; left:50%;">heyyyy</p> -->

    <!-- header section -->
    <section id="header">



        <div style="color: white; z-index: 0; display: flex;flex-direction: row-reverse; " class="header_nav">
            <p style="position: relative ; left:-20px;"><a href="#" style="text-decoration:none; font-size=34; color:white "><?php
                                                                                                                                session_start();
                                                                                                                                echo " " . $_SESSION['user_name'];


                                                                                                                                ?> </a></p>
            <p style="padding:0px 10px;position: relative ; left:-20px;"> | </p>
            <p style="position: relative ; left:-20px;"><a href="marks.html" style="text-decoration:none; color:white  ">MARKS INPUT</a></p>
            <p style="padding:0px 10px;position: relative ; left:-20px;"> | </p>
            <p style="position: relative ; left:-20px;"><a href="viva.html" style="text-decoration:none; color:white ">VIVA</a></p>
            <p style="padding:0px 10px; position: relative ; left:-20px;"> | </p>
            <p style="position: relative ; left:-20px;"><a href="admit.html" style="text-decoration:none; color:white ">ADMISSION</a></p>
            <p style="position: relative ; left: 320px; top:30px; font-size: 12.5px;"> <a href="adminLogin.php" style="text-decoration:none; color:white "> LOG OUT</a></p>
        </div>

        <div></div>

        <div>
            <p id="head3">
                ADMISSION PORTAL
            </p>

        </div>
        <img src="css/img/bup_logoM.png" alt="" class="logo">
    </section>

    <section id="admin">

        <!-- style="position:absolute; top:50%; left:50%;" -->
        <div>
            <div style="background-color:#251A4C; padding:10% 12%;position: absolute; left:10%;top:50%; color:white">
                <p style="position:relative ; left:-60px; top: -65px;">Welcome</p>
                <p style="position:relative ; left:-60px; top: -40px;">
                    <?php

                    echo " " . $_SESSION['user_name'];


                    ?>

                </p>
            </div>
            <div id="options" style="border-radius: 8% ; padding:4% 12%; position:absolute; top:50%; left:55%; background-color: #a6ccff;">
                <!-- style="float: right; background-color: brown;" -->
                <div class="flex-container">
                    <p style="background-color: #85B0E9; padding: 14%; width:150%; border-radius: 50px; text-align: center; font-weight: bold; position:relative; left: -60%">Available Portals</p>
                    <p style="background-color:#251A4C; color:white; padding:8%; border-radius:8px; margin-top:25%; position:relative;left:-15%;"> <a href="marks.html" style="text-decoration:none; color: white;">Input Marks</a> </p>
                    <p style="background-color:#251A4C; color:white; padding:8%; border-radius:8px; margin-top:20%; position:relative;left:-15%;"> <a href="viva.html" style="text-decoration:none; color: white;">Viva List</a></p>
                    <p style="background-color:#251A4C; color:white; padding:8%; border-radius:8px; margin-top:20%; position:relative;left:-15%;"> <a href="admit.html" style="text-decoration:none; color: white;">Admission List</a></p>
                </div>
            </div>
        </div>
    </section>




</body>

</html>