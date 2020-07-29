<?php
    session_start();
    include("connect/connect.php");
    include("function.php");
    if(!$_SESSION['s_id']){
        header("location:index.php?status=error");
    }else{
        if($_SESSION['s_status'] == 'U'){
            header("location:evotecolor63.php");
        }else{

?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM candidate WHERE c_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        require_once 'component/head.php';
    ?>
    <style>
        body{
            font-family: 'Mitr' ,sans-serif;
            background-image: url(assets/img/02.jpg);
        }
    </style>

<body>
    <?php
        require_once 'component/navbar2.php';
    ?>

    <div class="container mt-5">
        <div class="row">

        <?php
                require_once 'component/box.php';
            ?>

            <div class="col-xl-8 col-lg-7 mt-5 ">
                <div class="col-md-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 7px solid #e91e63;border-radius:7px">
                    <h4 class="text-primary text-center">บริหารจัดการผู้สมัคร</h4>
                    <hr>
                    <h5>ส่วนที่ 1 ข้อมูลทั่วไป</h5>
                  
                    <form method="post" action="process/editcandidate.php" enctype="multipart/form-data">
                        <div class="form-group d-none">
                            <label for="exampleInputEmail1">ไอดีการแก้ไข</label>
                            <input type="name" class="form-control" value="<?php echo $row['c_id']; ?>" name="c_id" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                            <input type="name" class="form-control" value="<?php echo $row['c_name']; ?>" name="c_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">คณะสี</label>
                            <select class="form-control selectpicker" name="c_color" data-style="btn btn-link" id="exampleFormControlSelect1">
                                <option value="<?php echo $row['c_color']?>"><?php
                                    if($row['c_color'] == '1'){
                                        echo 'สามัคคี (สีแดง)';
                                    }else if($row['c_color'] == '2'){
                                        echo 'เทอดจรรยา (สีเหลือง)';
                                    }else if($row['c_color'] == '3'){
                                        echo 'การุณรักษ์ (สีม่วง)';
                                    }else if($row['c_color'] == '4'){
                                        echo 'ภักดิ์พิรีย์ (สีฟ้า)';
                                    }else if($row['c_color'] == '5'){
                                        echo 'ศรีวัฒนา (สีเขียว)';
                                    }
                                 ?></option>
                                <option value="1">คณะสีสามัคคี</option>
                                <option value="2">คณะสีเทอดจรรยา</option>
                                <option value="3">คณะสีการุณรักษ์</option>
                                <option value="4">คณะสีภักดิ์พิรีย์</option>
                                <option value="5">คณะสีศรีวัฒนา</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">เบอร์</label>
                            <input type="name" class="form-control" value="<?php echo $row['c_number']; ?>" name="c_number">
                        </div>

                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">วีดิโอ</label>
                                    <input type="name" class="form-control" value="<?php echo $row['c_video']; ?>" name="c_video">
                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $row['c_video'] ?>"   style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                                </div>
                            </div>
                           
                        </div>
                        
                        

                                              
                        <button type="submit" name="submit" class="btn btn-warning btn-sm w-100" style="font-size:15px">แก้ไข</button>                 
                    </form>
                    <hr>
                    <h5>ส่วนที่ 2 รูปภาพ</h5>
                    <div class="col-xl-12 text-center">

                        <img src="uploads/<?php echo $row['c_pic']; ?>" class="img-fluid w-50">
                        <form action="process/upload5.php?id=<?php echo $row['c_id'] ?>" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                   
                  

                    
                </div>
                
                
                
            </div>
            
        </div>
    </div>



    <?php
        require_once 'component/jslink.php';
    ?>
    
</body>
</html>
<?php } ?>
<?php } ?>