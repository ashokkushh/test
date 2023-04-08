<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit4'])){
            $publications = $_POST['publicatioCurricula'];
            $courses = $_POST['coursesCurricula'];
            $score = $_POST['scoreCurricula'];

            $sql = "INSERT INTO `new_curricula`(`Publications_Details`, `No of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 