<?php
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $c_name = $_POST['c_name'];
        $c_number = $_POST['c_number'];
        $c_color = $_POST['c_color'];
        $c_video = $_POST['c_video'];

        $sql = "INSERT INTO `candidate` (`c_id`, `c_number`, `c_name`, `c_pic`, `c_video`, `c_color`) 
        VALUES (NULL, '$c_number', '$c_name', '0','$c_video', '$c_color')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../addcandidate.php?status=successinsert");
        }else{
            header("location:../addcandidate.php?status=errorinsert");
        }
    }

?>