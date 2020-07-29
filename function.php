<?php

    include("connect/connect.php");

    function readcolor(){
        if($_SESSION['s_color'] == '1'){ //สีแดง
            echo 'สามัคคี (สีแดง)';
        }else if($_SESSION['s_color'] == '2'){ //สีเหลือง
            echo 'เทอดจรรยา (สีเหลือง)';
        }else if($_SESSION['s_color'] == '3'){ //สีม่วง
            echo 'การุณรักษ์ (สีม่วง)';
        }else if($_SESSION['s_color'] == '4'){ //สีฟ้า
            echo 'ภักดิ์พิรีย์ (สีฟ้า)';
        }else if($_SESSION['s_color'] == '5'){ //สีเขียว
            echo 'ศรีวัฒนา (สีเขียว)';
        }else{ //ไม่พบ
            echo '404';
        }
    }

    function colorstyle() {
        if($_SESSION['s_color'] == '1'){ //สีแดง
            echo 'bg-danger';
        }else if($_SESSION['s_color'] == '2'){ //สีเหลือง
            echo 'bg-warning';
        }else if($_SESSION['s_color'] == '3'){ //สีม่วง
            echo 'bg-primary';
        }else if($_SESSION['s_color'] == '4'){ //สีฟ้า
            echo 'bg-info';
        }else if($_SESSION['s_color'] == '5'){ //สีเขียว
            echo 'bg-success';
        }else{ //ไม่พบ
            echo 'bg-rose';
        }
    }

    function buttonstyle() {
        if($_SESSION['s_color'] == '1'){ //สีแดง
            echo 'btn-danger';
        }else if($_SESSION['s_color'] == '2'){ //สีเหลือง
            echo 'btn-warning';
        }else if($_SESSION['s_color'] == '3'){ //สีม่วง
            echo 'btn-primary';
        }else if($_SESSION['s_color'] == '4'){ //สีฟ้า
            echo 'btn-info';
        }else if($_SESSION['s_color'] == '5'){ //สีเขียว
            echo 'btn-success';
        }else{ //ไม่พบ
            echo 'bg-rose';
        }
    }

    function boxstatus(){
        if(isset($_GET['status'])){
            $status = $_GET['status'];
            if($status == 'successinsert'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b> <i class="fas fa-check"></i> เพิ่มข้อมูลแล้ว !
                    </div>
                </div>';
            }else if($status == 'errorinsert'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่สามารถเพิ่มข้อมูลได้ !
                    </div>
                </div>';
            }else if($status == 'erroredit'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่สามารถแก้ไขข้อมูลได้ !
                    </div>
                </div>';
            }else if($status == 'notfoundid'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่พบไอดีที่ต้องการแก้ไข !
                    </div>
                </div>';
            }else if($status == 'successedit'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-check"></i> แก้ไขข้อมูลสำเร็จ !
                    </div>
                </div>';
            }else if($status == 'errordel'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-times"></i> ไม่สามารถลบข้อมูลได้ !
                    </div>
                </div>';
            }else if($status == 'successdel'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-check"></i> ลบข้อมูลสำเร็จ !
                    </div>
                </div>';
            }else if($status == 'success'){
                echo '<div class="alert alert-success" style="border-radius: 5px;">
                    <div class="container">
                        <b></b><i class="fas fa-check"></i> ลงคะแนนเสียงสำเร็จ !
                    </div>
                </div>';
            }
            else if($status == 'error'){
                echo '<div class="alert alert-danger" style="border-radius: 5px;">
                <div class="container">
                    <b></b><i class="fas fa-times"></i> ไม่สามารถลงคะแนนเสียงได้ !
                </div>
            </div>';
            }
        }
    }

    function dateupdate(){
        $yaer  = date('Y');
        $month = date('m');
        $date = date('d/m/Y');
        $format = $date;

        echo $format;
        $th=mktime(gmdate("H")+7,gmdate("i"));
		$format="H:i";
							
		$str=date($format,$th);
		echo " เวลา: $str น.";
    }


?>