<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    $userdata=$_SESSION['userdata'];
    $groupsdata=$_SESSION['groupsdata'];

    if($_SESSION['userdata']['status']==0){
        $status = '<b style="color:red">Not Voted</b>';
    }
    else{
        $status = '<b style="color:green">Voted</b>';
    }

?>


<html>
    <head>
        <title>voting System - Dashboard</title>
        <link rel="stylesheet" href ="../css/stylesheet.css">
    </head>
    <body>
        <style>
            #backbtn{
                padding: 10px;
                border-radius: 5px;
                width: 20%;
                background-color: cornflowerblue;
                color: cornsilk;
                border-radius: 5px;
                float: left;
                margin:10px;

            }
            #logoutbtn{
                padding: 10px;
                border-radius: 5px;
                width: 20%;
                background-color: cornflowerblue;
                color: cornsilk;
                border-radius: 5px;
                float: right;
                margin:10px;

            }
            #profile{
                background-color: white;
                width: 30%;
                padding: 20px;
                float: left;
            }
            #Group{
                background-color: white;
                width: 50%;
                padding: 20px;
                float: right;
            }
            #votebtn{
                padding: 10px;
                border-radius: 5px;
                width: 20%;
                background-color: cornflowerblue;
                color: cornsilk;
                border-radius: 5px;

            }
            #mainpanel{
                padding: 10px;
            }
        </style>
        <div id="mainSection">
         <center>
            <div id="headerSection";>
            <a href="../"><button id="backbtn">Back</button></a>
            <a href="logout.php"><button id="logoutbtn">Logout</button></a>
            <h1>Voting System</h1>
            </div>
        </center>
        <hr>
        <div id="mainpanel">
            <div id="profile">
                <center><img src="../uploads/<?php echo $userdata['photo']?>" height="200" width="200"></center><br><br>
                <b>Name:</b> <?php echo $userdata['Name']?><br><br>
                <b>mobile:</b><?php echo $userdata['mobile']?><br><br>
                <b>Address:</b><?php echo $userdata['Address']?><br><br>
                <b>status:</b><?php echo $status?><br><br>
            </div>
            <div id="Group">
              <?php
                if($_SESSION['groupsdata']){
                    for($i=0; $i<count($groupsdata); $i++){
                        ?>
                        <div>
                            <img style="float: right" src="../uploads/<?php echo $groupsdata[$i]['photo']?>"height="100" width="100">
                            <b>Group name:</b><?php echo $groupsdata[$i]['Name']?><br><br>
                            <b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br>
                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['ID'] ?>">
                                <input type="submit" name="votebtn" value="Result" id="votebtn">
                            </form>

                        </div>
                        <hr> 
                        <?php
                        
                    }

                }
                else{

                }
            
            ?>    
            </div>
        </div>
    </body>

</html>     