<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit5'])){
            $publications = $_POST['publicatioMoocs'];
            $courses = $_POST['coursesMoocs'];
            $score = $_POST['scoreMoocs'];

            $sql = "INSERT INTO `moocs(3(c)_ development_of_complete_moocs))`(`Publications_Details`, `No of Courses`, `Score`) 
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 