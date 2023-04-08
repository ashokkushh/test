<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit12'])){
            $publications = $_POST['publicatioEditorContributor'];
            $courses = $_POST['coursesEditorContributor'];
            $score = $_POST['scoreEditorContributor'];

            $sql = "INSERT INTO `e_content_development_contribution`(`Publications`, `No of Courses`, `Score`)
            VALUES ('$publications','$courses','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 