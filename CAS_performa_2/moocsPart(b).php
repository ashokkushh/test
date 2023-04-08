<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit6'])){
            $publications = $_POST['publicatioMoocsPerModule'];
            $courses = $_POST['coursesMoocsPerModule'];
            $score = $_POST['scoreMoocsPerModule'];

            $sql = "INSERT INTO `development_moocs_per_lecture`(`Publications`, `No of Courses`, `Score`) 
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 