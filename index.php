<!DOCTYPE html>
<html lang="en">
    <head> <!-- Cadmus Gentzel -->
        <meta charset="utf-8">
        <title> Student Index </title>
    </head>
    <h1>Student Indexing</h1>
    <hr> 
    <body>         

    <?php
        include('Student_Class.php'); //include class file
        session_start(); //start session
        if(isset($_SESSION['studentdata']))
            $students = $_SESSION['studentdata']; //visited this page previously
        else{
            $students = array();
            $students[] = new Student(1, 1, 1, 1);
            $_SESSION['studentdata'] = $students;
        }

        if(isset($_POST['submit'])) {
            empty($_POST['StudentID']) ? $Student_ID = " - " : $Student_ID = $_POST['StudentID'];
            empty($_POST['StudentName']) ? $Student_Name = " - " : $Student_Name = $_POST['StudentName'];
            empty($_POST['MidTermScore']) ? $Midterm_Score = " - " : $Midterm_Score = $_POST['MidTermScore'];
            empty($_POST['FinalExamScore']) ? $FinalExam_Score = " - " : $FinalExam_Score = $_POST['FinalExamScore'];
            $students[] = new Student($Student_ID, $Student_Name, $Midterm_Score, $FinalExam_Score); //add student
            $_SESSION['studentdata'] = $students; //update students array to session
        } 
    ?>

    <form method="post" action="index.php">
        <p><input type= "text" name="StudentID" size = "10" value= ""> Student ID</p>
        <p><input type= "text" name="StudentName" size = "15" value= ""> Student Name</p>
        <p><input type= "text" name="MidTermScore" size = "10" value = ""> Midterm Score</p>
        <p><input type= "text" name="FinalExamScore" size = "10" value = ""> Final Exam</p>
        <p><input type= "submit" name="submit">
    </form>
    <p>Student Count: <?php echo count($students); ?></p>
    <p><a href="Display_Students.php">Full Student Information</a></p> 
    </body>
</html>