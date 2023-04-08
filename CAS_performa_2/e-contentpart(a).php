<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit9'])){
            $publications = $_POST['publicatioE-Content'];
            $courses = $_POST['coursesE-Content'];
            $score = $_POST['scoreE-Content'];

            $sql = "INSERT INTO `e-content(development_e-content)`(`Publications`, `No of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 