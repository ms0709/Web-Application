<?php

    include 'connect.php';
    if(isset($_GET['deletesno'])){
        $sno=$_GET['deletesno'];
        
        $sql = "DELETE FROM `clgdetails` WHERE sno = $sno";
        $result= mysqli_query($conn, $sql);
        if($result){
            header('location:display.php');
        }
        else {
        die(mysqli_error($conn));
    } 
    }
    
         ?>