<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit8'])){
            $publications = $_POST['publicatioCorrdinator'];
            $courses = $_POST['coursesCorrdinator'];
            $score = $_POST['scoreCorrdinator'];

            $sql = "INSERT INTO `course_coordinatofr_moocs`(`Publications`, `No of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 