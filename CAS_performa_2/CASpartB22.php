<?php include("connection.php");  ?>

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
    #bitexInfo{
        margin-left:7%;
        width:80%;
        /* padding: 7.1px; */
        /* border: none; */
        border-radius:3px;
        /* background-color: rgb(124, 223, 236); */
        /* margin-left:40%; */
    }
    .bib{
        margin-left:7%;
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


        <h4 style="text-decoration:underline; text-align: center;">PART B: ASSESSMENT OF PERFORMANCE</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5><br><br>
<form >
    <label class='bib'><b>BibTex:  </b> </label><br>
   <input type="text" id="bitexInfo" class="form-control"  onchange="convert()">

    <form action="CASpartB22_submit.php" method="post">

    <div style="margin-left: 100px; margin-right: 100px;">
            <div>

                <b> <label for="#" ; style="text-decoration:underline;">Category II: Research, Publications and Academic
                        Contributions</label>
                </b> <br>


        <label for="">Category II: Research, Publications and Academic Contributions</label>
        <br>
        <label for="">1. Research Papers published in Peer Reviewed or UGC listed Journals</label>
        <br>

        <label for="">Title</label>
        <br>
        <input type="text" name="title" class="form-control" id="title">
        <br>
        <label for="">Page No</label>
        <br>
        <input type="text" name="pages" class="form-control">
        <br>
        <label for="">Journal</label>
        <br>
        <input type="text" name="journal" class="form-control" id="journal">
        <br>
        <label for="">ISSN / ISBN No. of Publication</label>
        <br>
        <input type="text" name="issn" class="form-control" id="issn">
        <br>
        <label for="">Whether Peer Reviewed Impact Factor,if any</label>
        <br>
        <input type="text" name="review" class="form-control" id="review">
        <br>
        <label for="">No. of co-authors</label>
        <br>
        <input type="text" name="coauthors" class="form-control" id="noAuth">
        <br>
        <label for="">Whether you are the main author</label>
        <br>
        <input type="text" name="mainauthor" class="form-control" id="main">
        <br>
        <label for="">Year</label>
        <br>
        <input type="text" name="year" class="form-control" id="year">
        <br>
        <label for="">Score</label>
        <br>
        <input type="text" name="score" class="form-control" id="score">
        <br>


       



        <div class="input_field">
            <input type="submit" value="Submit" name="submit" class="button" id="submit">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   

    <table>
        <thead>
            <th>Title </th>
            <th>Page No </th>
            <th>Journal </th>
            <th>ISSN / ISBN No.</th>
            <th>Whether Peer Reviewed Impact Factor, if any</th>
            <th>No. of co-authors</th>
            <th>Whether you are the main author</th>
            <th>Year </th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array = array();
            $sql1 = "SELECT * FROM `researchpaper` ORDER BY `Journal` DESC";
            $dataArray = mysqli_query($conn, $sql1);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray)){ 
                $data_array[] = $rows; 
            }
                             
            foreach($data_array as $showData){ 
                 
        ?>

        <tr>
            <td><?php echo $showData ['Title']; ?></td>
            <td><?php echo $showData ['Page No']; ?></td>
            <td><?php echo $showData ['Journal']; ?></td>
            <td><?php echo $showData ['ISSN / ISBN No. of Publication']; ?></td>
            <td><?php echo $showData ['Whether Peer Reviewed Impact Factor, if any']; ?></td>
            <td><?php echo $showData ['No. of co-authors']; ?></td>
            <td><?php echo $showData ['Whether you are the main author']; ?></td>
            <td><?php echo $showData ['Year']; ?></td>
            <td><?php echo $showData ['Score']; ?></td>
        </tr>
        <?php }?>
    </table>


<!------------------------------------------------------------------ Table1 Completed----------------------------------------------------------------------------------->

<!------------------------------------------------------------------ Table2 Started---------------------------------------------------------------------------------->

<form action="CASpartB22(a).php" method="post">
 <br>
     
                <label for="#"> <b> 2. Publications (other than Research Papers): </b></label>
                <br>
                <label for="#">2(a). Books authored which are published by International/National Publishers, Chapter in
                    Edited Book, Editor of Book by International/ National Publisher</label>
                <table frame="box">
                    <tr>
                        <br>
                       <!-- <label>S.No.</label>
                       <input type="text" required class="form-control">
                       <br> -->
                       <label>Chapter</label>
                       <input type="text" name="Chapter1" required class="form-control">
                       <br>
                       <label>Title</label>
                       <input type="text" name="title" required class="form-control">
                       <br>
                       <label>Page No</label>
                       <input type="text" name="pages" required class="form-control">
                       <br>
                       <label>Year</label>
                       <input type="text" name="year" required class="form-control">
                       <br>
                       <label>Publisher</label>
                       <input type="text" name="publisher" required class="form-control">
                       <br>
                       <label>ISSN/
                            ISBN No.
                        </label>
                        <input type="text" name="issn" required class="form-control">
                        <br>
                       <label>No. of co-authors
                        </label>
                        <input type="text" name="Authors1" required class="form-control">
                        <br>
                        <label>Are you Main Author ?</label>
                        <input type="text" name="MainA1" required class="form-control">
                        <br>
                       <label>National / International</label>
                       <input type="text" name="National1" required class="form-control" >
                       <br>
                       <label>Score
            
                        </label>
                  
                        <input type="text" name="S1" required class="form-control" >
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit1" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Chapter</th>
            <th>Title</th>
            <th>Page No</th> 
            <th>Year</th> 
            <th>Publisher</th> 
            <th>ISSN / ISBN No.</th>
            <th>No. of co-authors</th>
            <th>Are you Main author ?</th>
            <th>National / International</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `publicationuser1` order by `ISSN / ISBN No.` DESC";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Chapter']?></td>
            <td><?php echo $showData1 ['Title']; ?></td>
            <td><?php echo $showData1 ['Page No']; ?></td>
            <td><?php echo $showData1 ['Year']; ?></td>
            <td><?php echo $showData1 ['Publisher']; ?></td>
            <td><?php echo $showData1 ['ISSN / ISBN No.']?></td>
            <td><?php echo $showData1 ['No. of co-authors']?></td>
            <td><?php echo $showData1 ['Are you Main author ?']?></td>
            <td><?php echo $showData1 ['National / International']?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table>       

            
                  
<!--///////////////////////////////////////////////////////////////////////////////// table 2 part(b)/////////////////////////////////////////////////////////////// -->

<form action="CASpartB22b.php" method="post">

            
<br>
<label for="#"><b>2(b). Translation works in Indian and Foreign Languages by Qualified Faculties</b></label>
           
       
            <br>
            <label>Title</label>
            <br>
            <input type="text" name="title" required class="form-control">
            <br>
            <label>Publisher
                </label>
                <input type="text" name="publisher" required class="form-control">
                <br>
                <label>Pages
                </label>
                <input type="text" name="pages" required class="form-control">
                <br>
                <label>Year
                </label>
                <input type="text" name="year" required class="form-control">
                <br>
                <label>ISSN/
                    ISBN No.
                </label>
                <input type="text" name="issn"  required class="form-control">
                   <br>
                <label>National / International</label><br>
                
                <input type="text" name="National4" required  class="form-control"><br>
                <br>
      
      
  
       <label for=""> Total Score</label>
       <input type="text" name="TS1" required class="form-control">
 
<div class="input_field">
            <input type="submit" value="Submit" name="submit2" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>

 </form>
  
 <table>
        <thead>
            <th>Title</th>
            <th>Publisher</th>
            <th>Pages</th>
            <th>Year</th>
            <th>ISSN / ISBN No.</th>
            <th>National / International</th>
            <th>Total Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql3 = "SELECT * FROM `publicationuserpartb` order by `ISSN/ ISBN No.` DESC";
            $dataArray1 = mysqli_query($conn, $sql3);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Title']?></td>
            <td><?php echo $showData1 ['Publisher']?></td>
            <td><?php echo $showData1 ['Pages']?></td>
            <td><?php echo $showData1 ['Year']?></td>
            <td><?php echo $showData1 ['ISSN/ ISBN No.']?></td>
            <td><?php echo $showData1 ['National / International']?></td>
            <td><?php echo $showData1 ['Total Score']?></td>
        </tr>
        <?php }?>
    </table> 



 





<!--////////////////////////// 3rd Table _ Creation of ICT Mediated Teaching Learning Pedagogy and content development of new and innovative courses and curricula///////// -->







<form action="CASpartB3(a).php" method="post">
 <br>
     
                <br>
                <label for="#"><b>3(a&b) Creation of ICT Mediated Teaching Learning Pedagogy and content development of new and innovative courses and curricula:</b></label><br>
                <label for="#"> <b>3(a) Development of Innovative Pedagogy</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publication_Details</label>
                       <input type="text" name="publicatioInnovative" required class="form-control">
                       <br>
                       <label>Number of Courses</label>
                       <input type="text" name="coursesInnovative" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreInnovative" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit3" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `development_innovative`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publication_Details']?></td>
            <td><?php echo $showData1 ['Number of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 











<!--///////////////////////////////////////////////////////////////// Table 3 part b ((b)	Design of New Curricula and Courses)//////////////////////////////////// -->




    <form action="CASpartB3(b).php" method="post">
 <br>
     
                <br>
                <label for="#"><b>3(b) Design of New Curricula and Courses</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publication_Details</label>
                       <input type="text" name="publicatioCurricula" required class="form-control">
                       <br>
                       <label>Number of Courses</label>
                       <input type="text" name="coursesCurricula" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreCurricula" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit4" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>


   
              
    <table>
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `new_curricula`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications_Details']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 






<!-- /////////////////////////////////////////////////////////////////MOOCS///////////////////////////////////////////////////////////////////////////////////// -->




    <form action="moocsPart(a).php" method="post">
 <br>
     
                <br>
                <label for="#"><b>3(c) MOOCS</b></label><br>
                <label for="#"><b>3(c).1 Development of complete MOOCs in 4 Quadrants </b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publication_Details</label>
                       <input type="text" name="publicatioMoocs" required class="form-control">
                       <br>
                       <label>Number of Courses</label>
                       <input type="text" name="coursesMoocs" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreMoocs" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit5" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `moocs(3(c)_ development_of_complete_moocs))`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications_Details']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 




















<!--////////////////////////////////////////////MOOCs (developed in 4 Quadrants) per module/ lecture//////////////////////////////////////////////////////////////// -->



    <form action="moocsPart(b).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><h2>MOOCS</h2></label><br> -->
                <label for="#"><b>3(c).2 MOOCs (developed in 4 Quadrants) per module/ lecture </b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioMoocsPerModule" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesMoocsPerModule" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreMoocsPerModule" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit6" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
 

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `development_moocs_per_lecture`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 











<!--////////////////////////////////////////Content writer/subject matter expert for each module of MOOCs (at least 1 quadrant)////////////////////////////////////// -->



    <form action="moocsContentSubmit.php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><h2>MOOCS</h2></label><br> -->
               <label for="#"><b>3(c).3 Content writer/subject matter expert for each module of MOOCs (at least 1 quadrant)</b> </label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioContent" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesContent" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreContent" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit7" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `moocs_content_writer`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 





    

<!--//////////////// Course Coordinator for MOOCs (4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit) ///////////////////////////////////////////-->



<form action="moocsCoordinator.php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><h2>MOOCS</h2></label><br> -->
               <label for="#"><b>3(c).4 Course Coordinator for MOOCs 
(4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit)</b>		
 </label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioCorrdinator" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesCorrdinator" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreCorrdinator" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit8" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `course_coordinatofr_moocs`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 







<!--////////////////////////////// Development of e-Content in 4 Quadrants for a complete course/e-book/////////////////////////////////////////////// -->


<form action="e-contentpart(a).php" method="post">
 <br>
     
                <br>
                <label for="#"><b>3(d) e-Content:</b></label><br>
               <label for="#"><b>3(d).1 Development of e-Content in 4 Quadrants for a complete course/e-book</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioE-Content" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesE-Content" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreE-Content" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit9" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `e-content(development_e-content)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 





<!--//////////////////////////////e-Content (developed in 4 Quadrants) per module/////////////////////////////////////////////// -->


<form action="e-contentpart(b).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><h2>E-Content</h2></label><br> -->
               <label for="#"><b>3(d).2 e-Content (developed in 4 Quadrants) per module</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioE-ContentPerModule" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesE-ContentPerModule" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreE-ContentPerModule" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit10" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `e_content_per_module`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 






    

<!--///////////////////////Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)/////////////////////////////////////////////// -->


<form action="e-contentpart(c).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><h2>E-Content</h2></label><br> -->
               <label for="#"><b>3(d).3 Editor of e-content for complete course/ paper / e-book</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioEditor" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesEditor" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreEditor" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit11" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `editor_of_e-content`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 



















<!--///////////////////////Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)/////////////////////////////////////////////// -->


<form action="" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><h2>E-Content</h2></label><br> -->
               <label for="#"><b>3(d).4 Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioEditorContributor" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesEditorContributor" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreEditorContributor" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit12" class="button" id="submit1">
             <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a>
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `e_content_development_contribution`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 



    </form>

<script>


function convert() {
let citation = document.querySelector('#bitexInfo').value;
const regex = /([^\s]+)\s*=\s*\{([^}]*)\}/g;
const matches = citation.matchAll(regex);

for (const match of matches) 
 { let key = match[1];
    console.log(key);
    let value = match[2];
  let inputFields = document.querySelectorAll('input[type="text"]');
  let inputArray = Array.from(inputFields);
  for (let i = 0; i < inputArray.length; i++) {
    let inputField = inputArray[i];
let fieldName = inputArray[i].getAttribute('name');
  if (fieldName === key) {
    inputField.value = value;

}
  }


  
  }
}

function saveBitexField() {
  const bitexField = document.querySelector('#bitexfield');
  localStorage.setItem('bitexfieldValue', bitexField.value);
}

function loadBitexField() {
  const bitexField = document.querySelector('#bitexfield');
  const bitexFieldValue = localStorage.getItem('bitexfieldValue');
  if (bitexFieldValue !== null) {
    bitexField.value = bitexFieldValue;
  }
}

window.addEventListener('load', loadBitexField);
window.addEventListener('beforeunload', saveBitexField);
</script>
 

</body>
</html>



























              









               
                 
                 
                 
                 

                   
                   
                   
                   
                   
                   
                   
                   
                   




<!-- 



              
             
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#"> <b> 3(a&b). Creation of ICT Mediated Teaching Learning Pedagogy and content development
                        of new
                        and innovative courses and curricula:</b> </label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center"> Activity
                                (Attach Evidences)
                            </td>
                            <td align="center">Publication Details
                            </td>
                            <td align="center">No. of Course(s)</td>
                            <td align="center">Score(Refer <br> Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">(a)</td>
                            <td>Development of Innovative Pedagogy</td>
                            <td><input type="text" name="Publication1" required style="width: 140px;"></td>
                            <td><input type="text" name="Course1" required style="width: 140px;"></td>
                            <td><input type="text" name="Sc1" required style="width: 140px;"></td>
                        </tr>
                        <tr>
                            <td align="center">(b)</td>
                            <td>Design of New Curricula and Courses</td>
                            <td><input type="text" name="Publication2" required style="width: 140px;"></td>
                            <td><input type="text" name="Course2" required style="width: 140px;"></td>
                            <td><input type="text" name="Sc2" required style="width: 140px;"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;"> &nbsp; &nbsp; &nbsp; Total Score</td>
                            <td><input type="text" name="TS2" required style="width: 140px;"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">3(c) <b> MOOCs: </b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center"> Activity
                                (Attach Evidences)
                            </td>
                            <td align="center">Publication Details
                            </td>
                            <td align="center">No. of Course(s)</td>
                            <td align="center">Score
                                (Refer Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Development of complete MOOCs in 4 Quadrants (4 credit course)
                                (In case of MOOCs of lesser credits: 05 marks/credit)
                            </td>
                            <td><input name="Publication4" type="text"></td>
                            <td><input name="Course4" type="text"></td>
                            <td><input name="Score4" type="text"></td>
                        </tr>
                        <tr>
                            <td>(b)</td>
                            <td>MOOCs (developed in 4 Quadrants) per module/lecture</td>
                            <td><input name="Publication5" type="text"></td>
                            <td><input name="Course5" type="text"></td>
                            <td><input name="Score5" type="text"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Content writer/subject matter expert for each module of MOOCs
                                (at least 1 quadrant)
                            </td>
                            <td><input name="Publication6" type="text"></td>
                             <td><input name="Course6" type="text"></td>
                            <td><input name="Score6" type="text"></td>
                        </tr>
                        <tr>
                            <td>(b)</td>
                            <td>Course Coordinator for MOOCs
                                (4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit)
                            </td>
                            <td><input name="Publication7" type="text"></td>
                            <td><input name="Course7" type="text"></td>
                            <td><input name="Score7" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS3" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">3(d) <b>e-Content </b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center"> Activity
                                (Attach Evidences)
                            </td>
                            <td align="center">Publication Details
                            </td>
                            <td align="center">No. of Course(s)</td>
                            <td align="center">Score
                                (Refer Table 2: <br> Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Developmentof e-Contentin4 Quadrants for a complete course/e-book
                            </td>
                            <td><input name="Publication8" type="text"></td>
                            <td><input name="Course8" type="text"></td>
                            <td><input name="Score8" type="text"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>MOOCs (developed in 4 Quadrants) per module/lecture</td>
                            <td><input name="Publication9" type="text"></td>
                            <td><input name="Course9" type="text"></td>
                            <td><input name="Score9" type="text"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Contribution to development of e-content module in complete course/paper/e-book (at
                                least
                                one quadrant)
                            </td>
                            <td><input name="Publication10" type="text"></td>
                            <td><input name="Course10" type="text"></td>
                            <td><input name="Score10" type="text"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Editor of e-content for complete course/ paper /e-book
                            </td>
                            <td><input name="Publication11" type="text"></td>
                            <td><input name="Course11" type="text"></td>
                            <td><input name="Score11" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS4" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">4(a) <b>Research Guidance:(With Evidences) </b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td align="center">
                                S.No.
                            </td>
                            <td align="center">Dissertation
                            </td>
                            <td align="center">Number Enrolled
                            </td>
                            <td align="center">Thesis Submitted</td>
                            <td align="center">Degree awarded with <br> year of award
                            </td>
                            <td align="center">Score
                                (Please refer <br> Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td>M. Phil/PG
                            </td>
                            <td><input name="number1" type="text"></td>
                            <td><input name="thesis1" type="text"></td>
                            <td><input name="degree1" type="text"></td>
                            <td><input name="score12" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Ph.D. or Equivalent</td>
                            <td><input name="number2" type="text"></td>
                            <td><input name="thesis2" type="text"></td>
                            <td><input name="degree2" type="text"></td>
                            <td><input name="score13" type="text"></td>

                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS5" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">4(b) <b>Research Projects Completed: (With Evidences)</b></label>
                <table frame="box">

                    <tbody></tbody>

                    <tr>
                        <td>
                            S.No.
                        </td>
                        <td>Title
                        </td>
                        <td>Agency
                        </td>
                        <td>Period</td>
                        <td>Grant/Amount (Rs.in Lakh)
                        </td>
                        <td>Score
                            (Please refer Table 2: <br> Appendix II)
                        </td>
                    </tr>

                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title1" type="text"></td>
                            <td><input name="agency1" type="text"></td>
                            <td><input name="period1" type="text"></td>
                            <td><input name="grant1" type="text"></td>
                            <td><input name="score14" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title2" type="text"></td>
                            <td><input name="agency2" type="text"></td>
                            <td><input name="period2" type="text"></td>
                            <td><input name="grant2" type="text"></td>
                            <td><input name="score15" type="text"></td>

                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title3" type="text"></td>
                            <td><input name="agency3" type="text"></td>
                            <td><input name="period3" type="text"></td>
                            <td><input name="grant3" type="text"></td>
                            <td><input name="score16" type="text"></td>

                        </tr>

                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS6" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#"> <b>Note: </b> More than 10 Lakh: 10 score &nbsp &nbsp Less than 10 Lakh: 5 score
                </label>
                <br>
                <label for="#">4(c) <b>Research Projects Ongoing: (With Evidences)</b></label>
                <table frame="box">
                    <tbody>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Period</td>
                            <td>Grant/Amount (Rs.in Lakh)
                            </td>
                            <td>Score
                                (Please refer Table 2: <br> Appendix II)
                            </td>
                        </tr>

                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title4" type="text"></td>
                            <td><input name="agency4" type="text"></td>
                            <td><input name="period4" type="text"></td>
                            <td><input name="grant4" type="text"></td>
                            <td><input name="score17" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title5" type="text"></td>
                            <td><input name="agency5" type="text"></td>
                            <td><input name="period5" type="text"></td>
                            <td><input name="grant5" type="text"></td>
                            <td><input name="score18" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title6" type="text"></td>
                            <td><input name="agency6" type="text"></td>
                            <td><input name="period6" type="text"></td>
                            <td><input name="grant6" type="text"></td>
                            <td><input name="score19" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS7" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#"> <b>Note: </b> More than 10 Lakh: 10 score &nbsp &nbsp Less than 10 Lakh: 5 score
                </label>
                <br>
                <br>
                <label for="#">4(d) <b>Consultancy (With Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Period</td>
                            <td>Grant/Amount (Rs.in Lakh)
                            </td>
                            <td>Score
                                (Please refer Table 2: <br> Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title7" type="text"></td>
                            <td><input name="agency7" type="text"></td>
                            <td><input name="period7" type="text"></td>
                            <td><input name="grant7" type="text"></td>
                            <td><input name="score20" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title8" type="text"></td>
                            <td><input name="agency8" type="text"></td>
                            <td><input name="period8" type="text"></td>
                            <td><input name="grant8" type="text"></td>
                            <td><input name="score21" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title9" type="text"></td>
                            <td><input name="agency9" type="text"></td>
                            <td><input name="period9" type="text"></td>
                            <td><input name="grant9" type="text"></td>
                            <td><input name="score22" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="5" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS8" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">5(a) <b>Patents: (With Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Period</td>
                            <td>National/ International
                            </td>
                            <td>Grant/Amount (Rs. in Lakh)</td>
                            <td>Score
                                (Please refer Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title10" type="text"></td>
                            <td><input name="agency10" type="text"></td>
                            <td><input name="period10" type="text"></td>
                            <td><input name="international1" type="text"></td>
                            <td><input name="grant10" type="text"></td>
                            <td><input name="score23" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title11" type="text"></td>
                            <td><input name="agency11" type="text"></td>
                            <td><input name="period11" type="text"></td>
                            <td><input name="international2" type="text"></td>
                            <td><input name="grant11" type="text"></td>
                            <td><input name="score24" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="6" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS9" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                <br>
                <label for="#">5(b) <b>Policy Document (Submitted to an Internationalbody/ Organisation, like
                        UNO/UNESCO/World Bank/International Monetary Fund etc. or Central Government/ State Government)
                        (Attach Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Title
                            </td>
                            <td>Agency
                            </td>
                            <td>Date of submission</td>
                            <td>State/National/ International
                            </td>
                            <td>Grant/Amount (Rs. in Lakh)</td>
                            <td>Score
                                (Please refer Table 2: Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title12" type="text"></td>
                            <td><input name="agency12" type="text"></td>
                            <td><input name="period12" type="text"></td>
                            <td><input name="international3" type="text"></td>
                            <td><input name="grant12" type="text"></td>
                            <td><input name="score25" type="text"></td>
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title13" type="text"></td>
                            <td><input name="agency13" type="text"></td>
                            <td><input name="period13" type="text"></td>
                            <td><input name="international4" type="text"></td>
                            <td><input name="grant13" type="text"></td>
                            <td><input name="score26" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="6" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS10" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <label for="#">5(c) <b>Awards/Fellowships: (With Evidences)</b></label>
                <table frame="box">
                    <thead>
                        <tr>
                            <td>
                                S.No.
                            </td>
                            <td>Award/Fellowship
                            </td>
                            <td>National/ International
                            </td>
                            <td>Score
                                (Please refer Table 2: <br> Appendix II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                           
                                <td><input name="title14" type="text"></td>
                                <td><input name="international5" type="text"></td>
                                <td><input name="score27" type="text"></td>
    
                        </tr>
                        <tr>
                            <td><input type="text" style="width:70px ;"></td>
                            <td><input name="title15" type="text"></td>
                            <td><input name="international6" type="text"></td>
                            <td><input name="score28" type="text"></td>
                        </tr>

                        <tr>
                            <td colspan="3" style="text-align: center;"> Total Score</td>
                            <td> <input name="TS11" type="text"></td>
                        </tr>
                    </tbody>

                </table>
                <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                     <           input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>      
                <br>
                <label for="#">6. <b>Invited lectures /Resource Person/paper presentation in Seminars/Conferences/full
                        paper
                        in Conferences proceedings (Paper presented in Seminars/ Conferences and also published as full
                        paper in Conference Proceedings will be counted only once)</b></label>
                <div class="container">
                    <div class="row col-md-6 col-md-offset-3 ">

                        <table frame="box" style="width: 100%;">
                            <thead>
                                <tr>
                                    <td>
                                        S.No.
                                    </td>
                                    <td>Activity
                                        (Attach Evidences)

                                    </td>
                                    <td>International (Abroad)/International (within Country)/ National/
                                        State/University
                                    </td>
                                    <td>Score
                                        (Please refer Table 2: Appendix II)
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" style="width:70px ;"></td>
                                    <td><input name="title16" type="text"></td>
                                    <td><input name="international7" type="text"></td>
                                    <td><input name="score29" type="text"></td>

                                </tr>
                                <tr>
                                    <td><input type="text" style="width:70px ;"></td>
                                    <td><input name="title17" type="text"></td>
                                    <td><input name="international8" type="text"></td>
                                    <td><input name="score30" type="text"></td>
                                </tr>

                                <tr>
                                    <td colspan="3" style="text-align: center;"> Total Score</td>
                                    <td> <input name="TS12" type="text"></td>
                                </tr>
                            </tbody>

                        </table>
                        <label for="#"> <b> Grand Total-Category II </b>(Sum of 1 to 6) &nbsp &nbsp &nbsp <input
                                type="text"></label>
                    </div>
                </div>
                <br>
                <br>
                <h5 style="text-decoration:underline ;text-align: center;">SUMMARY OF GRADING & SCORE</h5>

                <table class="table" frame="box" style="width: 100%;">
                    <thead>
                        <tr>
                            <td>
                                Category
                            </td>
                            <td>Criteria</td>
                            <td>Overall Grading*
                                (Category I)
                                (1A and 1B) </td>
                            <td>Name of Activity attended
                                (As per Clause 6.4 of Regulations
                                for Category I-1C)

                            </td>
                            <td>Total Score (Category II)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> I</td>
                            <td colspan="4"><b>Teaching, Learning and Evaluation related Activities: </b></td>
                        </tr>
                        <tr>
                            <td>1A</td>
                            <td> Teaching</td>
                            <td><input name="title18" type="text"></td>
                            <td><input name="international9" type="text"></td>
                            <td><input name="score31" type="text"></td>
                        </tr>
                        <tr>
                            <td>1B</td>
                            <td>Examination, Evaluation Activities & Administrative Support & Participation in Students’
                                Co-curricular & Extra-curricular Activities</td>
                                <td><input name="title19" type="text"></td>
                                <td><input name="international10" type="text"></td>
                                <td><input name="score32" type="text"></td>
                        </tr>
                        <tr>
                            <td>1C</td>
                            <td>Personal Development related to Teaching and Research Activities:</td>
                            <td><input name="title20" type="text"></td>
                            <td><input name="international11" type="text"></td>
                            <td><input name="score33" type="text"></td>

                        </tr>
                        <tr>
                            <td>II</td>
                            <td><b>Research, Publication and Academic Contribution.</b></td>
                            <td><input name="title21" type="text"></td>
                            <td><input name="international12" type="text"></td>
                            <td><input name="score34" type="text"></td>
                        </tr>
                    </tbody>

                </table>


                <p>
                    &nbsp <b>*Overall Grading:</b>
                    <br>
                    <b>Good:</b> &nbsp Good in Teaching (1A of Category I) and Satisfactory or Good in Activity in 1B of
                    Category I, or
                    <br>
                    <b>Satisfactory:</b> &nbsp Good in Teaching (1A of Category I) and Satisfactory or Good in Activity
                    in
                    1B of Category I, or
                    <br>
                    <b>Not Satisfactory:</b> &nbsp If neither Good nor Satisfactory in Overall Grading.
                    <br>
                    <b>List of Enclosures:</b> &nbsp (Please attach, copies of certificates, sanction orders, papers
                    etc.
                    wherever necessary)
                    <br>
                </p>
                <table>
                    <tr>
                        <td>1</td>
                        <td><input name="Enclosures1" type="text"></td>
                        <td>6</td>
                        <td><input name="Enclosures2" type="text"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input name="Enclosures3" type="text"></td>
                        <td>7</td>
                        <td><input name="Enclosures4" type="text"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input name="Enclosures5" type="text"></td>
                        <td>8</td>
                        <td><input name="Enclosures6" type="text"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input name="Enclosures7" type="text"></td>
                        <td>9</td>
                        <td><input name="Enclosures8" type="text"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input name="Enclosures9" type="text"></td>
                        <td>10</td>
                        <td><input name="Enclosures10" type="text"></td>
                    </tr>

                </table>
            </div>
        </div>
        <div style="margin-left: 100px; margin-right: 100px;">
            <label for="#">I certify that the information provided is correct as per records available with the
                university and/or documents enclosed along with the duly filled Assessment Criteria and Methodology
                proforma.</label>



            <br> &nbsp
            <br> &nbsp
            <br>
            <br> &nbsp
            <br> &nbsp

            <label for="#">Signature of the Faculty Member <br>
                Designation, Place and Date</label>
            <label for="#">Certified that the information submitted by Prof./ Dr. __________________________ is verified
                and
                I recommend his / her promotion to next level as he / she has completed all necessary requirements
                stipulated and being enforced as on today, by UGC.

            </label>
            <br> &nbsp
            <br> &nbsp
            <br>
            <p style="text-align:right ;">Signatures of HoD with Stamp</p>
            <label for="#">Verified and recommended for promotion to next level.</label>
            </label>
            <br> &nbsp
            <br> &nbsp
            <br>
            <p style="text-align:right ;">Signatures of Dean with Stamp</p>
            <label for="#">N.B.: The Dean and Head will assure that the information submitted by the faculty member is
                correct on the basis of evidences submitted and by signing above; they are verifying information and
                recommending the faculty member for promotion.</label>

        </div>

        <br>
        <br>
        <div class="container"> <button type="submit"class="btn btn-primary">Save</button>
        </div>
        <br>
        <br> -->
    <!-- </form> -->
 



   

