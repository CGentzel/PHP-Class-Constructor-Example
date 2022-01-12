<!DOCTYPE html>
<html>
<head?><title>Full Student Index</title></head?>
<body>
    <h2> List of Students</h2>    

    <?php
        include('Student_Class.php');
        
        session_start();
        
        if(isset($_SESSION['studentdata']))
            $students = $_SESSION['studentdata'];
        else{
            header('Location: index.php'); //no information in table yet
            exit();
        }
    
        echo "<table cellspacing='8'><tr><th>ID</th><th>Name</th><th>Midterm</th><th>Final</th></tr>";  

        for($i = 0; $i < count($students); $i++) {  
            echo "<tr><td> {$students[$i]->getID()} </td><td> {$students[$i]->getName()} </td>";  
            echo "<td> {$students[$i]->getMidTerm()} </td><td> {$students[$i]->getFinal()} </td></tr>";  
        }   
    
        echo "</table>"; 
    
    ?>
    <p><a href="index.php">Student Input Page</a></p> 
    
</body>
</html>