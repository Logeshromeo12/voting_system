<html> 
<?php 
//including the database connection file
 include_once("connect.php"); 
  if(isset($_POST['Submit']))
 {       
  $mobile = $_POST['mobile']; 
  $password = $_POST['password']; 
    $role = $_POST['role'];  
    //$blood = $_POST['blood'];  
//$disease= $_POST['disease'];  

   
         // checking empty fields    
 /*if(empty($name) || empty($age) || empty($email)|| empty($blood)|| empty($disease))
 {    
                     if(empty($name))
 {        
     echo "<font color='red'>Name field is empty.</font><br/>";
         }             
     if(empty($age))
 {
             echo "<font color='red'>Age field is empty.</font><br/>";  
       } 
                 if(empty($email)) {
             echo "<font color='red'>Email field is empty.</font><br/>"; 
        } 
         if(empty($blood)) {
             echo "<font color='red'>blood field is empty.</font><br/>"; 
        } 
         if(empty($disease)) {
             echo "<font color='red'>disease field is empty.</font><br/>"; 
        } 
    
                 //link to the previous page
         echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
     }*/ 
    
     // if all the fields are filled (not empty)
                      //insert data to database 
        $result = mysqli_query($connect, "");  
                //display success message    
     echo "<font color='green'>Data added successfully.";  
       echo "<br/><a href='index.php'>View Result</a>";
      } 
?>
 </body> </html> 