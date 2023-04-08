<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit7'])){
            $designationPosts = $_POST['designationPosts'];
            $departmrntPost = $_POST['departmrntPost'];
            $joiningDatePost = $_POST['joiningDatePost'];
            $leavingDatePost = $_POST['leavingDatePost'];
            $gradePost = $_POST['gradePost'];
           
            
          

            $sql = "INSERT INTO `posts_held(part_a)`(`Designation`, `Department`, `Joining from`, `Joining to`, `Grade/Level`)
                   VALUES ('$designationPosts','$departmrntPost','$joiningDatePost','$leavingDatePost','$gradePost')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?>  