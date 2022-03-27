<?php
if(!isset($_POST['home'])){
    die("can not edit the record");
}else{
    $id =$_POST['uid'];
    echo $id;
    $title = $_POST['title'];
    $descriptions = $_POST['descriptions'];
    
     include('connect.php');
     $query = "UPDATE goal SET title='$title', descriptions= '$descriptions' WHERE id='$id'";
     if(mysqli_query($conn, $query)){
        header('location:../home.php?msg=successfully update');
     }else{
         header('location:../home.php?errmsg=',mysqli_error($conn));
    }
}

?>