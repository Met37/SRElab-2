<?php
session_start();

$error = ''; //Variable to Store error message;
if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        $error = "Username or Password is Invalid";
    } else {
        //Define $user and $pass
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //Establishing Connection with server by passing server_name, user_id and pass as a patameter
        $conn = mysqli_connect("localhost", "root", "");
        //Selecting Database
        $db = mysqli_select_db($conn, "aap_student");
        //sql query to fetch information of registerd user and finds user match.
        $query = mysqli_query($conn, "SELECT * FROM student WHERE pass='$pass' AND user='$user'  ");


        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['user_name'] = $user;
            header("Location: admission.php");

            // Redirecting to other page
        } else {
            $error = "Username of Password is Invalid";
        }
        mysqli_close($conn); // Closing connection
    }
}

?>








<!Doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .login {
            width: 360px;
            margin: 50px auto;
            font: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
            border-radius: 10px;
            /* border: 2px solid #ccc; */
            padding: 10px 40px 25px;
            margin-top: 70px;
        }

        input[type=text],
        input[type=password] {
            width: 99%;
            padding: 10px;
            margin-top: 8px;
            /* border: 1px solid #ccc; */
            padding-left: 5px;
            font-size: 16px;
            font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
        }

        input[type=submit] {
            width: 100%;
            background-color: #009;
            color: #fff;
            border: 2px solid #06F;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>

    <link rel="stylesheet" href="css/studentLogin.css">
</head>

<body>

    <div class="container">
        <div class="login">
            <h1 align="center">Login</h1>
            <form action="studentLogin.php" method="post" style="text-align:center;">
                <input type="text" placeholder="Username" id="user" name="user"><br /><br />
                <input type="password" placeholder="Password" id="pass" name="pass"><br /><br />
                <input type="submit" value="Login" name="submit">
                <!-- Error Message -->
                <span><?php echo $error; ?></span>

        </div>
</body>

</html>