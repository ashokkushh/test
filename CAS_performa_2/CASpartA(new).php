<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS Proforma Part B | II</title>
    <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
        background-color: #dddddd;
    }
    #submit{
       border:none;
       border-radius:3px;
       margin-left:auto;
       text-align:centre;
    }
    .submit{
        align-items:center;
        padding:2px;
       display:flex;
       justify-content:center;
    }
    .input_field> input{
        margin:10px;
        padding: 7.1px;
        border: none;
        border-radius:3px;
        background-color: rgb(124, 223, 236);
        margin-left:40%;
    }
    #bitexInfo {
        margin-left:7%;
        width:80%;
        border-radius:3px;
    }

    .bib {
        margin-left:7%;
    }

    .partA{
        margin-left: 10%;
        margin-right: 10%;
    }
    #part_A{
        margin-top:6%;
    }

</style>
<link rel="stylesheet" href="css/bootstrap.css">
    <script src="script.js"> </script>

</head>
<body>

<div class="blockquote text-center">
            <h3>Dayalbagh Educational Institute</h3>
            <h4>(Deemed To Be University)</h4>
            <h4>Dayalbagh, Agra</h4>
            <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

</div>


<hr style="border-top: 1mm solid black ;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand"> <img class="svg" src="logo.jpeg" alt="Bootstrap" width="40" height="40"
                    loading="lazy"></a>
            <a class="navbar-brand" href="https://www.dei.ac.in/dei/">DEI Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://admission.dei.ac.in:8085/cms_new/">DEI CMS<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://www.dei.ac.in/dei/files/IQAC/2022/CAS_GUIDELINES_2018.pdf">CAS
                            GUIDELINES<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="index.html">Log
                        Out</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                        formaction="home.html">Back</button>
                </form>
            </div>
        </nav>


        <h4 style="text-decoration:underline; text-align: center;" id='part_A'>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5><br><br>

<form class='partA'>
<!------------------------------------------------------------------------------- table 1(part-a)----------------------------------------------------------------------->


<form action="CASpartA(a).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(a) Academic Qualifications (Matric till post-graduation)</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Qualification</label>
                       <input type="text" name="qualification" required class="form-control">
                       <br>
                       <label>Name of the Board/University</label>
                       <input type="text" name="board" required class="form-control">
                       <br>
                       <label>Passing Year</label>
                       <input type="text" name="year" required class="form-control">
                       <br>
                       <label>Marks Obtained</label>
                       <input type="text" name="marks" required class="form-control">
                       <br>
                       <label>Division/ Grade</label>
                       <input type="text" name="division" required class="form-control">
                       <br>
                       <label>Subject</label>
                       <input type="text" name="subject" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit8" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Qualification</th>
            <th>Name of the Board/University</th>
            <th>Passing Year</th>
            <!-- <th>Passing Year</th> -->
            <th>Marks Obtained</th>
            <th>Division/ Grade</th>
            <th>Subject</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `academic_qualification(parta)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Qualification']?></td>
            <td><?php echo $showData1 ['Name of the Board/University']?></td>
            <td><?php echo $showData1 ['Passing Year']?></td>
            <td><?php echo $showData1 ['Marks Obtained']?></td>
            <td><?php echo $showData1 ['Division/ Grade']?></td>
            <td><?php echo $showData1 ['Subject']?></td>
        </tr>
        <?php }?>
    </table> 





<!---------------------------------------------------------------------- table 2 part(a)-------------------------------------------------------------------------->
<form action="CASpart1(b).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(b)	Research Degree(s)</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Degrees</label>
                       <input type="text" name="degree" required class="form-control">
                       <br>
                       <label>Title</label>
                       <input type="text" name="title" required class="form-control">
                       <br>
                       <label>Date of Reward</label>
                       <input type="text" name="dateReward" required class="form-control">
                       <br>
                       <label>University</label>
                       <input type="text" name="university" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit6" class="button" id="submit2">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Degrees</th>
            <th>Title</th>
            <th>Date of Reward</th>
            <th>Passing Year</th>
            <th>University</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `research_degree( part_a)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Degree']?></td>
            <td><?php echo $showData1 ['Title']; ?></td>
            <td><?php echo $showData1 ['Date of Reward']?></td>
            <td><?php echo $showData1 ['University']?></td>
        </tr>
        <?php }?>
    </table> 





<!-------------------------------------------------------------------- table 1  part(c)------------------------------------------------------------------------------>

<form action="CASpart1(c).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(c)	Appointment held prior to joining this Institution</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Designation</label>
                       <input type="text" name="designationAppointment" required class="form-control">
                       <br>
                       <label>Name of the employer</label>
                       <input type="text" name="employer" required class="form-control">
                       <br>
                       <label>Date of Joining</label>
                       <input type="text" name="joiningDate" required class="form-control">
                       <br>
                       <label>Date of Leaving</label>
                       <input type="text" name="leavingDate" required class="form-control">
                       <br>
                       <label>Salary with Grades</label>
                       <input type="text" name="salary" required class="form-control">
                       <br>
                       <label>Reason of leaving</label>
                       <input type="text" name="reasonLeaving" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit7" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Designation</th>
            <th>Name of the employer</th>
            <th>Date of Joining</th>
            <th>Date of Leaving</th>
            <th>Salary with Grades</th>
            <th>Reason of leaving</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `appointment_held(part-(a))`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Designation']?></td>
            <td><?php echo $showData1 ['Name of the employer']; ?></td>
            <td><?php echo $showData1 ['Date of Joining']?></td>
            <td><?php echo $showData1 ['Date of Leaving']?></td>
            <td><?php echo $showData1 ['Salary with Grades']?></td>
            <td><?php echo $showData1 ['Reason of leaving']?></td>
        </tr>
        <?php }?>
    </table> 




<!------------------------------------------------------------------- table 1 part(d)---------------------------------------------------------------------------------->
    <form action="CASpart1(d).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(d)	Posts held after appointment at this Institute</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Designation</label>
                       <input type="text" name="designationPosts" required class="form-control">
                       <br>
                       <label>Department</label>
                       <input type="text" name="departmrntPost" required class="form-control">
                       <br>
                       <label>Joining from</label>
                       <input type="text" name="joiningDatePost" required class="form-control">
                       <br>
                       <label>Joining to</label>
                       <input type="text" name="leavingDatePost" required class="form-control">
                       <br>
                       <label>Grade/Level</label>
                       <input type="text" name="gradePost" required class="form-control">
                       <br>
                       
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit7" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Designation</th>
            <th>Department</th>
            <th>Joining from</th>
            <th>Joining to</th>
            <th>Grade/Level</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `posts_held(part_a)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Designation']?></td>
            <td><?php echo $showData1 ['Department'] ?></td>
            <td><?php echo $showData1 ['Joining from']?></td>
            <td><?php echo $showData1 ['Joining to']?></td>
            <td><?php echo $showData1 ['Grade/Level']?></td>
        </tr>
        <?php }?>
    </table> 


</form>

</body>
</html>