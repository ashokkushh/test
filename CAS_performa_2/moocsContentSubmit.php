<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit7'])){
            $publications = $_POST['publicatioContent'];
            $courses = $_POST['coursesContent'];
            $score = $_POST['scoreContent'];

            $sql = "INSERT INTO `moocs_content_writer`(`Publications`, `No of Courses`, `Score`) 
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 