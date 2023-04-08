<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit7'])){
            $designationAppointment = $_POST['designationAppointment'];
            $employee = $_POST['employer'];
            $joiningDate = $_POST['joiningDate'];
            $leavingDate = $_POST['leavingDate'];
            $salary = $_POST['salary'];
            $reasonLeaving = $_POST['reasonLeaving'];
            
          

            $sql = "INSERT INTO `appointment_held(part-(a))`(`Designation`, `Name of the employer`, `Date of Joining`, `Date of Leaving`, `Salary with Grades`, `Reason of leaving`)
            VALUES ('$designationAppointment','$employee','$joiningDate','$leavingDate','$salary','$reasonLeaving')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?> 