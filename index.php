<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'component/head.php';

?>
<style>
body{
    font-family: 'Mitr' ,sans-serif;
}
.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}
.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}
.wave2{
	position: fixed;
	left: 0;
	z-index: -1;
    margin-top:200px;
    margin-left: 150px;
    height: 55%;
}
.wave3{
	position: fixed;
	left: 0;
	z-index: -1;
    margin-top:150px;
    margin-left: 130px;
    height: 50%;
}
.wave4{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	
}

</style>

<body class="bg-white">
    <img class="wave d-none d-xl-block d-lg-block wow fadeInLeft" src="assets/img/wave.png">
    <img class="wave4 d-md-block d-lg-none d-xl-none wow fadeInLeft" src="assets/img/wave.png">
    <img class="wave2 d-none d-xl-block  wow fadeInLeft" src="assets/img/result.png ">
    <img class="wave3 d-none d-lg-block d-xl-none  wow fadeInLeft" src="assets/img/result.png ">

    <div class="container wow fadeInUp" align="right">
   
        <div class="col-xl-6 col-lg-5 mt-xl-5 text-center d-none d-sm-block">
            <br>
            <br>
            <div class="col-xl-12">      
                <img src="assets/img/logo.png" class="img-fluid w-50 mt-5">   
            </div>          
        </div>

        <div class="col-xl-6 col-lg-5 mt-5 text-center d-sm-none d-md-none d-lg-none d-xl-none">
            <div class="col-xl-12">
                <img src="assets/img/logo.png" class=" img-fluid w-75">
            </div>          
        </div>
        
        <div class="col-xl-6 col-lg-5 text-center bg-white" style="border-radius: 10px;" align="center">
                <br class="d-md-block d-lg-none d-xl-none">
                        
                <h3 class="text-rose text-center">ระบบเลือกตั้งประธานคณะสี <br class="d-none d-lg-block d-xl-none">ปีการศึกษา 2563</h3>
                <h5>โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</h5>
                <hr>
                <?php
                    if(isset($_GET['status'])){
                        $status = $_GET['status'];
                ?>
                    <?php if($status == 'error'){ ?>
                        <div class="alert alert-danger" style="border-radius: 5px;">
                            <div class="container">
                                <b></b> เลขประจำตัวประชาชน หรือ รหัสผ่าน ไม่ถูกต้อง !
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
                   
                <div class="col-xl-12 py-4">
                        <form method="post" action="process/loginact.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="color: #464646">เลขประจำตัวประชาชน</label>
                                <input type="name" class="form-control" placeholder="เลขประจำตัวประชาชน" name="s_username" style="background-image: linear-gradient(to top, #9C27B0 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="color: #464646">รหัสผ่าน</label>
                                <input type="name" class="form-control"  placeholder="พิมพ์รหัสผ่าน 5 ตัวหลังบัตรประชาชน" style="background-image: linear-gradient(to top, #9C27B0 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);" name="s_password" required>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-success btn-sm w-100" style="font-size:15px">เข้าสู่ระบบ</button>
                        </form>
                        <a href="result-evoteyrc63.php">รายงานผลการเลือกตั้ง</a>
                        <hr>
                        <p style="color: #929292">©<?php echo date("Y") ?> All Right Reserved Kampanart.Ch , Ratchanon.Mo , Pongwish.So | Youth Computer YRC</p>
                </div>       
        </div>
            
    </div>



<?php
    require_once 'component/jslink.php';
?>
    
</body>
</html>