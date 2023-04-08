<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit'])){
            $tittle = $_POST['title'];
            $pages = $_POST['pages'];
            $journal = $_POST['journal'];
            $ISSN = $_POST['issn'];
            $review = $_POST['review'];
            $coauthors = $_POST['coauthors'];
            $mainauthor = $_POST['mainauthor'];
            $year = $_POST['year'];
            $score = $_POST['score'];

            $sql = "INSERT INTO `researchpaper`(`Title`, `Page No`, `Journal`, `ISSN / ISBN No. of Publication`, `Whether Peer Reviewed Impact Factor, if any`, `No. of co-authors`, `Whether you are the main author`, `Year`, `Score`) 
            VALUES ('$tittle','$pages','$journal','$ISSN','$review','$coauthors','$mainauthor','$year','$score')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 