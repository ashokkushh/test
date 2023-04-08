<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit8'])){
            $qualification = $_POST['qualification'];
            $board = $_POST['board'];
            $year = $_POST['year'];
            $marks = $_POST['marks'];
            $division = $_POST['division'];
            $subject = $_POST['subject'];
          

            $sql = "INSERT INTO `academic_qualification(parta)`(`Qualification`, `Name of the Board/University`, `Passing Year`, `Marks Obtained`, `Division/ Grade`, `Subject`) 
            VALUES ('$qualification','$board','$year','$marks','$division','$subject')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?>   