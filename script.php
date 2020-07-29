<div class="bg-danger text-light text-center mt-3" style="padding: 5px">
                            <h4><i class="fas fa-trophy"></i> คณะสีสามัคคี</h4>
                        </div>

                        <div class="row justify-content-center">
                            <?php
                                $sqlred = "SELECT * FROM vote WHERE c_color = '1' AND c_number = '1'" ;
                                $queryred  = mysqli_query($conn,$sqlred);
                                $numred1 = mysqli_num_rows($queryred);
                                

                                $sqlred2 = "SELECT * FROM vote WHERE c_color = '1' AND c_number = '2'" ;
                                $queryred2  = mysqli_query($conn,$sqlred2);
                                $numred2 = mysqli_num_rows($queryred2);

                                $sqlred3 = "SELECT * FROM vote WHERE c_color = '1' AND c_number = '3'" ;
                                $queryred3  = mysqli_query($conn,$sqlred3);
                                $numred3 = mysqli_num_rows($queryred3);
                            ?>

                            <?php
                                if(($numred1 > $numred2) > $numred3 || ($numred1 > $numred3) > $numred2 ){    
                            ?>
                                <div class="col-xl-4 mt-3">
                                    <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid red;border-radius:5px">
                                        <img src="assets/img/color/red1.jpg" class="img-fluid">  
                                        <a href="#" class="btn btn-danger w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                    </div>   
                                </div>

                            <?php }else if(($numred2 > $numred3)>$numred1 || ($numred2 > $numred1)>$numred3){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid red;border-radius:5px">
                                    <img src="assets/img/color/red2.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-danger w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else if(($numred3 > $numred2)>$numred1 || ($numred3 > $numred1)>$numred2 ){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid red;border-radius:5px">
                                    <img src="assets/img/color/red3.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-danger w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else{ ?>
                                <h4>ผู้สมัครมีผลโหวตเท่ากัน (อยู่ระหว่างประมวลผล)</h4>
                            <?php }?>
                        </div>

                        <div class="bg-warning text-light text-center mt-3" style="padding: 5px">
                            <h4><i class="fas fa-trophy"></i> คณะสีเทอดจรรยา</h4>
                        </div>
                         <div class="row justify-content-center">
                            <?php
                                $sqlyel = "SELECT * FROM vote WHERE c_color = '2' AND c_number = '1'" ;
                                $queryyel  = mysqli_query($conn,$sqlyel);
                                $numyel1 = mysqli_num_rows($queryyel);
                                

                                $sqlyel2 = "SELECT * FROM vote WHERE c_color = '2' AND c_number = '2'" ;
                                $queryyel2  = mysqli_query($conn,$sqlyel2);
                                $numyel2 = mysqli_num_rows($queryyel2);

                                $sqlyel3 = "SELECT * FROM vote WHERE c_color = '2' AND c_number = '3'" ;
                                $queryyel3  = mysqli_query($conn,$sqlyel3);
                                $numyel3 = mysqli_num_rows($queryyel3);
                            ?>

                            <?php
                                if(($numyel1 > $numyel2) > $numyel3 || ($numyel1 > $numyel3) > $numyel2 ){    
                            ?>
                                <div class="col-xl-4 mt-3">
                                    <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #ff9800;border-radius:5px">
                                        <img src="assets/img/color/yellow1.jpg" class="img-fluid">  
                                        <a href="#" class="btn btn-warning w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                    </div>   
                                </div>

                            <?php }else if(($numyel2 > $numyel3)>$numyel1 || ($numyel2 > $numyel1)>$numyel3){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #ff9800;border-radius:5px">
                                    <img src="assets/img/color/yellow2.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-warning w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else if(($numyel3 > $numyel2)>$numyel1 || ($numyel3 > $numyel1)>$numyel2 ){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #ff9800;border-radius:5px">
                                    <img src="assets/img/color/yellow3.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-warning w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else{ ?>
                                <h4>ผู้สมัครมีผลโหวตเท่ากัน (อยู่ระหว่างประมวลผล)</h4>
                            <?php }?>
                        </div>

                        <div class="bg-primary text-light text-center mt-3" style="padding: 5px">
                            <h4><i class="fas fa-trophy"></i> คณะสีการุณรักษ์</h4>
                        </div>
                        <div class="row justify-content-center">
                            <?php
                                $sqlvio = "SELECT * FROM vote WHERE c_color = '3' AND c_number = '1'" ;
                                $queryvio  = mysqli_query($conn,$sqlvio);
                                $numvio1 = mysqli_num_rows($queryvio);
                                
                                $sqlvio2 = "SELECT * FROM vote WHERE c_color = '3' AND c_number = '2'" ;
                                $queryvio2  = mysqli_query($conn,$sqlvio2);
                                $numvio2 = mysqli_num_rows($queryvio2);

                                $sqlvio3 = "SELECT * FROM vote WHERE c_color = '3' AND c_number = '3'" ;
                                $queryvio3  = mysqli_query($conn,$sqlvio3);
                                $numvio3 = mysqli_num_rows($queryvio3);

                                $sqlvio4 = "SELECT * FROM vote WHERE c_color = '3' AND c_number = '4'" ;
                                $queryvio4  = mysqli_query($conn,$sqlvio4);
                                $numvio4 = mysqli_num_rows($queryvio4);
                            ?>

                            <?php
                                if(($numvio1 > $numvio2) > ($numvio3 >$numvio4)  || ($numvio1 > $numvio2) > ($numvio4 >$numvio3) ||($numvio1 > $numvio3) > ($numvio2 >$numvio4)  || ($numvio1 > $numvio3) > ($numvio4 >$numvio2)||($numvio1 > $numvio4) > ($numvio2 >$numvio3)  || ($numvio1 > $numvio4) > ($numvio3 >$numvio2) ){    
                            ?>
                                <div class="col-xl-4 mt-3">
                                    <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #9c27b0;border-radius:5px">
                                        <img src="assets/img/color/violet1.jpg" class="img-fluid">  
                                        <a href="#" class="btn btn-primary w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                    </div>   
                                </div>

                            <?php }else if(($numvio2 > $numvio1) > ($numvio3 >$numvio4)  || ($numvio2 > $numvio1) > ($numvio4 >$numvio3) ||($numvio2 > $numvio3) > ($numvio1 >$numvio4)  || ($numvio2 > $numvio3) > ($numvio4 >$numvio1)||($numvio2 > $numvio4) > ($numvio3 >$numvio1)  || ($numvio2 > $numvio4) > ($numvio1 >$numvio3)){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #9c27b0;border-radius:5px">
                                    <img src="assets/img/color/violet2.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-primary w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else if(($numvio3 > $numvio1) > ($numvio2 >$numvio4)  || ($numvio3 > $numvio1) > ($numvio4 >$numvio2) ||($numvio3 > $numvio2) > ($numvio1 >$numvio4)  || ($numvio3 > $numvio2) > ($numvio4 >$numvio1)||($numvio3 > $numvio4) > ($numvio2 >$numvio1)  || ($numvio3 > $numvio4) > ($numvio1 >$numvio2)){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #9c27b0;border-radius:5px">
                                    <img src="assets/img/color/violet3.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-primary w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else if(($numvio4 > $numvio1) > ($numvio2 >$numvio3)  || ($numvio4 > $numvio1) > ($numvio3 >$numvio2) ||($numvio4 > $numvio2) > ($numvio1 >$numvio3)  || ($numvio4 > $numvio2) > ($numvio3 >$numvio1)||($numvio4 > $numvio3) > ($numvio1 >$numvio2)  || ($numvio4 > $numvio3) > ($numvio2 >$numvio1)){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #9c27b0;border-radius:5px">
                                    <img src="assets/img/color/violet4.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-primary w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else{ ?>
                                <h4>ผู้สมัครมีผลโหวตเท่ากัน (อยู่ระหว่างประมวลผล)</h4>
                            <?php }?>
                        </div>

                        <div class="bg-info text-light text-center mt-3" style="padding: 5px">
                            <h4><i class="fas fa-trophy"></i> คณะสีภักดิ์พิรีย์</h4>
                        </div>
                        <div class="row justify-content-center">
                            <?php
                                $sqlbl = "SELECT * FROM vote WHERE c_color = '4' AND c_number = '1'" ;
                                $querybl  = mysqli_query($conn,$sqlbl);
                                $numbl1 = mysqli_num_rows($querybl);
                                

                                $sqlbl2 = "SELECT * FROM vote WHERE c_color = '4' AND c_number = '2'" ;
                                $querybl2  = mysqli_query($conn,$sqlbl2);
                                $numbl2 = mysqli_num_rows($querybl2);

                                $sqlbl3 = "SELECT * FROM vote WHERE c_color = '4' AND c_number = '3'" ;
                                $querybl3  = mysqli_query($conn,$sqlbl3);
                                $numbl3 = mysqli_num_rows($querybl3);
                            ?>

                            <?php
                                if(($numbl1 > $numbl2) > $numbl3 || ($numbl1 > $numbl3) > $numbl2 ){    
                            ?>
                                <div class="col-xl-4 mt-3">
                                    <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #00bcd4;border-radius:5px">
                                        <img src="assets/img/color/blue1.jpg" class="img-fluid">  
                                        <a href="#" class="btn btn-info w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                    </div>   
                                </div>

                            <?php }else if(($numbl2 > $numbl3)>$numbl1 || ($numbl2 > $numbl1)>$numbl3){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #00bcd4;border-radius:5px">
                                    <img src="assets/img/color/blue2.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-info w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else if(($numbl3 > $numbl2)>$numbl1 || ($numbl3 > $numbl1)>$numbl2 ){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #00bcd4;border-radius:5px">
                                    <img src="assets/img/color/blue3.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-info w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else{ ?>
                                <h4>ผู้สมัครมีผลโหวตเท่ากัน (อยู่ระหว่างประมวลผล)</h4>
                            <?php }?>
                        </div>

                        <div class="bg-success text-light text-center mt-3" style="padding: 5px">
                            <h4><i class="fas fa-trophy"></i> คณะสีศรีวัฒนา</h4>
                        </div>
                        <div class="row justify-content-center">
                            <?php
                                $sqlgn = "SELECT * FROM vote WHERE c_color = '5' AND c_number = '1'" ;
                                $querygn  = mysqli_query($conn,$sqlgn);
                                $numgn1 = mysqli_num_rows($querygn);
                                

                                $sqlgn2 = "SELECT * FROM vote WHERE c_color = '5' AND c_number = '2'" ;
                                $querygn2  = mysqli_query($conn,$sqlgn2);
                                $numgn2 = mysqli_num_rows($querygn2);

                                $sqlgn3 = "SELECT * FROM vote WHERE c_color = '5' AND c_number = '3'" ;
                                $querygn3  = mysqli_query($conn,$sqlgn3);
                                $numgn3 = mysqli_num_rows($querygn3);
                            ?>

                            <?php
                                if(($numgn1 > $numgn2) > $numgn3 || ($numgn1 > $numred3) > $numgn2 ){    
                            ?>
                                <div class="col-xl-4 mt-3">
                                    <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid red;border-radius:5px">
                                        <img src="assets/img/color/green1.jpg" class="img-fluid">  
                                        <a href="#" class="btn btn-success w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                    </div>   
                                </div>

                            <?php }else if(($numgn2 > $numgn3)>$numgn1 || ($numgn2 > $numgn1)>$numgn3){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid red;border-radius:5px">
                                    <img src="assets/img/color/green2.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-success w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else if(($numgn3 > $numgn2)>$numgn1 || ($numgn3 > $numgn1)>$numgn2 ){?>
                            <div class="col-xl-4">
                                <div class="col-md-12 bg-white py-3" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);border-bottom: 5px solid #4caf50;border-radius:5px">
                                    <img src="assets/img/color/green3.jpg" class="img-fluid">  
                                    <a href="#" class="btn btn-success w-100" style="font-size: 16px;">ได้รับเลือกเป็นประธานสี</a>
                                </div>   
                            </div>
                            <?php }else{ ?>
                                <h4>ผู้สมัครมีผลโหวตเท่ากัน (อยู่ระหว่างประมวลผล)</h4>
                            <?php }?>
                        </div>