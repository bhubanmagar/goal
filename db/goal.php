<?php 
include('connect.php');
if (isset ($_POST['tittle'])){
    $goal =$_POST['tittle'];
    $descriptions =$_POST['descriptions'];
    $accomplish_date =$_POST['accomplish_date'];
    $status =$_POST['status'];
     session_start();
    $user_id = $_SESSION['user_id'];

        if($goal!=''){
             
            $query = "INSERT INTO goal(tittle,accomplish_date,descriptions,status,user_id) VALUES('$goal','$accomplish_date','$descriptions','$status','$user_id')";
                 if(mysqli_query($conn,$query)){
            $msg ="Successfully Inserted";
                }else{
            $msg = mysqli_error($conn);
        }
        header('Location:../home.php?msg='.$msg);
             }else{
        $msg ="Goal name required";
        header('Location:../home.php>-?errmsg='.$msg);
        }
        }

?>