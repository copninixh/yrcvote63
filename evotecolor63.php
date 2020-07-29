<?php
    session_start();
    include("connect/connect.php");
    include("function.php");
    if(!$_SESSION['s_id']){
        header("location:index.php?status=error");
    }else{

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
            <?php
                $sqlvote = "SELECT * FROM vote WHERE s_id = '$_SESSION[s_id]'";
                $queryvote = mysqli_query($conn,$sqlvote);
                $numvote = mysqli_num_rows($queryvote);
                $row2 = mysqli_fetch_array($queryvote);

                if($numvote == '1'){
            ?>
                <div class="col-xl-8 col-lg-7 mt-5 mb-5 ">
                    <div class="col-md-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">                   
                        <?php boxstatus(); ?>
                    <div class="row justify-content-center">

                        <?php
                            $sql = "SELECT * FROM candidate WHERE c_color = '$row2[c_color]' AND  c_number = '$row2[c_number]'";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        
                            
                            <div class="col-xl-6 col-lg-7">
                                <div class="col-xl-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">
                                    <h4 class="text-center"><i class="fas fa-vote-yea"></i> เบอร์ <?php echo $row['c_number']; ?></h4>
                                    <h4 class="text-center text-rose"><?php echo $row['c_name']; ?></h4>
                                    <img src="uploads/<?php echo $row['c_pic']; ?>" class="img-fluid">
                                   
                                    <a href="#" class="btn btn-success w-100 btn-sm" style="font-size: 15px;">คุณได้ลงคะแนนเสียงเบอร์นี้</a>
                                    
                                </div>  
                            </div>
                            
                        <?php } ?> 
                        </div>

                       
                    </div>   
                </div>

            <?php }else{ ?>
                <div class="col-xl-8 col-lg-7 mt-5 mb-5 ">
                <div class="col-md-12 bg-white py-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #e91e63;border-radius:5px">
                    <div class="w-100 <?php colorstyle(); ?> text-light text-center">
                        <h4>นโยบายของแต่ละผู้สมัครในการพัฒนาคณะสี</h4>
                    </div>
                    <div class="row">
                    <?php
                        $sqlvideo = "SELECT * FROM candidate WHERE c_color = '$_SESSION[s_color]'";
                        $resultvideo = mysqli_query($conn,$sqlvideo);
                        while($fetch = mysqli_fetch_array($resultvideo)){
                    ?>
                        <div class="col-xl-6 mb-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?php echo $fetch['c_video'] ?>"   style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                   
                       
                    <div class="w-100 <?php colorstyle(); ?> text-light text-center">
                        <h4>รายละเอียดผู้สมัคร คณะสี<?php readcolor(); ?></h4>
                    </div>
                    <div class="row">
                    <?php
                        $sql = "SELECT * FROM candidate WHERE c_color = '$_SESSION[s_color]'";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                       
                        
                        <div class="col-xl-4 col-lg-4">
                            <div class="col-xl-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid red;border-radius:5px">
                                <h4 class="text-center"><i class="fas fa-vote-yea"></i> เบอร์ <?php echo $row['c_number']; ?></h4>
                                <img src="uploads/<?php echo $row['c_pic']; ?>" class="img-fluid">
                                <form action="process/voteact.php" method="post">
                                    <div class="form-group d-none">
                                        <input type="name" class="form-control" value="<?php echo $row['c_number']; ?>" name="c_number" required readonly>
                                        <input type="name" class="form-control" value="<?php echo $row['c_color']; ?>" name="c_color" required readonly>
                                        <input type="name" class="form-control" value="<?php echo $_SESSION['s_level']; ?>" name="s_level" required readonly>
                                        <input type="name" class="form-control" value="<?php echo $_SESSION['s_id']; ?>" name="s_id" required readonly>
                                    </div>
                                    <button onClick="javascript: return confirm('ยืนยันการลงคะแนนเสียง เบอร์ <?php echo $row['c_number']; ?> (<?php echo $row['c_name']; ?>) ใช่หรือไม่?');" name="insert" class="btn <?php buttonstyle(); ?> w-100 btn-sm" style="font-size: 15px;">เลือกผู้สมัคร</button>
                                
                                </form>    
                            </div>  
                        </div>
                        
                    <?php } ?>

                       
                      

                       
                    </div>

                    
                </div>
                
                
                
            </div>
            <?php }?>

            
            
        </div>
    </div>



    <?php
        require_once 'component/jslink.php';
    ?>
    
</body>
</html>
<?php } ?>