<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit11'])){
            $publications = $_POST['publicatioEditor'];
            $courses = $_POST['coursesEditor'];
            $score = $_POST['scoreEditor'];

            $sql = "INSERT INTO `editor_of_e-content`(`Publications`, `No of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 