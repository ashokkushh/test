<?php
     session_start();
        include("connection.php");
        if(isset($_POST['submit2'])){
          
            $title = $_POST['title'];
            $publisher = $_POST['publisher'];
            $pages = $_POST['pages'];
            $year = $_POST['year'];
            $ISSN = $_POST['issn'];
            $nationality = $_POST['National1'];
            $score = $_POST['submit2'];


            $sql3 = "INSERT INTO `publicationuserpartb`(`Title`, `Publisher`, `Pages`, `Year`, `ISSN/ ISBN No.`, `National / International`, `Total Score`) 
            VALUES ('$title','$publisher','$pages','$year','$ISSN','$nationality','$score')";
            $data = mysqli_query($conn, $sql3); 
            header("Location: CASpartB22.php");
        
            mysqli_close($conn);
        }


    ?> 
     