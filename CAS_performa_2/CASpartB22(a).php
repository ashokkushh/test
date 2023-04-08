<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit1'])){
            $chapter = $_POST['Chapter1'];
            $title = $_POST['title'];
            $pages = $_POST['pages'];
            $year = $_POST['year'];
            $publisher = $_POST['publisher'];
            $ISSN = $_POST['issn'];
            // $review = $_POST['review'];
            $coauthors = $_POST['Authors1'];
            $mainauthor = $_POST['MainA1'];
            $nationality = $_POST['National1'];
            $score = $_POST['S1'];

            $sql = "INSERT INTO `publicationuser1`(`Chapter`, `Title`, `Page No`, `Year`, `Publisher`, `ISSN / ISBN No.`, `No. of co-authors`, `Are you Main author ?`, `National / International`, `Score`)
            VALUES ('$chapter','$title','$pages','$year','$publisher','$ISSN','$coauthors','$mainauthor','$nationality','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 