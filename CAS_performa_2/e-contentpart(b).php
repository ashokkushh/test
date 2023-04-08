<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit10'])){
            $publications = $_POST['publicatioE-ContentPerModule'];
            $courses = $_POST['coursesE-ContentPerModule'];
            $score = $_POST['scoreE-ContentPerModule'];

            $sql = "INSERT INTO `e_content_per_module`(`Publications`, `No of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 