<?php include "./includes/header.php" ?>
<?php include "./includes/navbar.php" ?>

<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Begin Page Content -->
                <div class="container-fluid"> 
                <!-- Page Heading -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">รายชื่อข้อมูลคนไข้
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpatient">
                            เพิ่มข้อมูลคนไข้
                          </button>
                  </h6>
                </div>
                <div class="modal fade" id="addpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลคนไข้</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="code.php" method="POST">

                        <div class="modal-body">

                        <!-- <div class="form-group">
                            <form action="#">
                                <label>รูปภาพคนไข้</label>
                                <input type="file" id="myFile" name="filename">
                            </form>
                            </div> -->
                            <div class="form-group">
                                <label>ชื่อ </label>
                                <input type="text" name="firstname" class="form-control" placeholder="กรุณากรอกชื่อ">
                            </div>
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input type="text" name="lastname" class="form-control" placeholder="กรุณากรอกนามสกุล">
                            </div>
                            <div class="form-group">
                                <label>รหัสบัตรประชาชน</label>
                                <input type="text" name="id_card" class="form-control" placeholder="กรุณากรอกรหัสบัตรประชาชน">
                            </div>
                            <div class="form-group">
                                <label>อายุ</label>
                                <input type="text" name="age" class="form-control" placeholder="กรุณากรอกอายุ">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทร</label>
                                <input type="text" name="tel" class="form-control" placeholder="กรุณากรอกเบอร์โทร">
                            </div>
                            <div class="form-group">
                                <label>โรคประจำตัว</label>
                                <input type="text" name="congenital" class="form-control" placeholder="กรุณากรอกข้อมูลโรคประจำตัว(ถ้ามี)">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <input type="text" name="address" class="form-control" placeholder="กรุณากรอกที่อยู่">
                            </div>
                            <div class="form-group">
                                <label>การแพ้ยา</label>
                                <input type="text" name="drugallergy" class="form-control" placeholder="กรุณากรอกข้อมูลการแพ้ยา(ถ้ามี)">
                            </div>
                            <div class="form-group">
                                <label>ประวัติการรักษา</label>
                                <input type="text" name="history" class="form-control" placeholder="กรุณากรอกประวัติการรักษา">
                            </div>
                            <div class="form-group">
                                <label>ผู้ตรวจ</label>
                                <input type="text" name="keeper" class="form-control" placeholder="กรุณากรอกชื่อผู้ตรวจ">
                            </div>
                            <!-- <div class="form-group">
                                <label>อัพโหลดภาพเพิ่มเติม</label>
                                <form action="/action_page.php">
                                    <label>รูปภาพที่ 2</label>
                                    <input type="file" id="myFile" name="filename">
                                </form>
                                <form action="/action_page.php">
                                    <label>รูปภาพที่ 3</label>
                                    <input type="file" id="myFile" name="filename">
                                </form>
                                <form action="/action_page.php">
                                    <label>รูปภาพที่ 4</label>
                                    <input type="file" id="myFile" name="filename">
                                </form>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="patient_btn" class="btn btn-primary">Save</button>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
                     <?php 
                        $connection = mysqli_connect("localhost","root","","clinic");
                        $query = "SELECT * FROM data_patient";
                        $query_run = mysqli_query($connection,$query); 
                    ?>
                     <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">นามสกุล</th>
                            <th scope="col">รหัสบัตรประชาชน</th>
                            <th scope="col">อายุ</th>
                            <th scope="col">เบอร์โทร</th>
                            <th scope="col">โรคประจำตัว</th>
                            <th scope="col">ที่อยู่</th>
                            <th scope="col">การแพ้ยา</th>
                            <th scope="col">ประวัติการรักษา</th>
                            <th scope="col">ผู้ตรวจ</th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
                              if(mysqli_num_rows($query_run) > 0)
                              {
                                while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                              <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['id_card']; ?></td>
                                <td><?php echo $row['age'];  ?></td>
                                <td><?php echo $row['tel'];  ?></td>
                                <td><?php echo $row['congenital'];  ?></td>
                                <td><?php echo $row['address'];  ?></td>
                                <td><?php echo $row['drugallergy'];  ?></td>
                                <td><?php echo $row['history'];  ?></td>
                                <td><?php echo $row['keeper'];  ?></td>
                                <td>
                                  <form action="register_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>" >
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                  </form>
                                </td>
                                <td>
                                  <form action="code.php" method="post">
                                      <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                                      <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                  </form>      
                                </td>
                              </tr>
                              <?php
                                    }  
                                  }else{
                                    echo "No Record Found";
                                  }
                              ?>
                        </tbody>
                      </table>
                </div>

<?php include "./includes/scripts.php" ?>
<?php include "./includes/footer.php" ?>
