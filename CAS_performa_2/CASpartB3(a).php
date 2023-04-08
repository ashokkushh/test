<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit3'])){
            $publications = $_POST['publicatioInnovative'];
            $courses = $_POST['coursesInnovative'];
            $score = $_POST['scoreInnovative'];

            $sql = "INSERT INTO `development_innovative`(`Publication_Details`, `Number of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 