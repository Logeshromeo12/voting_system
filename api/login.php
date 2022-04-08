<?php
session_start();
include("connect.php");

$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];
$sql = "SELECT * FROM user where mobile = '$mobile' and role = '$role'";
$check = mysqli_query($connect, $sql);

//$check = mysqli_query($connect, "SELECT * FROM user Where mobile='$mobile' AND password='$password' AND role='$role'");
if(mysqli_num_rows($check) > 0)
{
    $userdata = mysqli_fetch_array($check);
    $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
    $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupsdata'] = $groupsdata;
    
    echo '
    <script>
    alert("Login successful");
    window.location="../routes/dashboar.php";
    
    </script>
     ';
    

}
else{
    echo '
    <script> 
      alert("Invalid cridentials!"); 
      window.location = "../";
    </script>
';
}

?>