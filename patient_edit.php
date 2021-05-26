<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> แก้ไขข้อมูลคนไข้ </h6>
  </div>

    <div class="card-body">
    <?php 
    $connection = mysqli_connect("localhost","root","","clinic");
    if(isset($_POST['edit_btn_patient'])){
        $id = $_POST['edit_id_patient'];
        // echo $id;
        $query = "SELECT * FROM data_patient WHERE ID='$id' ";
        $query_run = mysqli_query($connection,$query);
    
        foreach($query_run as $row){
            ?>
            <form action="code.php" method="post">
            <input type="hidden" name="edit_id_patient" value="<?php echo $row['ID']  ?>">
            <div class="form-group">
                  <label>ชื่อ</label>
                  <input type="text" name="edit_firstname" value="<?php echo $row['firstname']  ?>" 
                  class="form-control" placeholder="กรุณากรอกชื่อ">
              </div>
              <div class="form-group">
                  <label>นามสกุล</label>
                  <input type="text" name="edit_lastname" value="<?php echo $row['lastname']  ?>"
                  class="form-control" placeholder="กรุณากรอกนามสกุล">
              </div>
              <div class="form-group">
                  <label>รหัสบัตรประชาชน</label>
                  <input type="text" name="edit_idcard" value="<?php echo $row['id_card']  ?>"
                  class="form-control" placeholder="กรุณากรอกรหัสบัตรประชาชน">
              </div>
              <div class="form-group">
                  <label>อายุ</label>
                  <input type="text" name="edit_age" value="<?php echo $row['age']  ?>"
                  class="form-control" placeholder="กรุณากรอกอายุ">
              </div>
              <div class="form-group">
                  <label>เบอร์โทร</label>
                  <input type="text" name="edit_tel" value="<?php echo $row['tel']  ?>"
                  class="form-control" placeholder="กรุณากรอกเบอร์โทร">
              </div>
              <div class="form-group">
                  <label>โรคประจำตัว</label>
                  <input type="text" name="edit_congenital" value="<?php echo $row['congenital']  ?>"
                  class="form-control" placeholder="กรุณากรอกข้อมูลโรคประจำตัว(ถ้ามี)">
              </div>
              <div class="form-group">
                  <label>ที่อยู่</label>
                  <input type="text" name="edit_address" value="<?php echo $row['address']  ?>"
                  class="form-control" placeholder="กรุณากรอกที่อยู่">
              </div>
              <div class="form-group">
                  <label>การแพ้ยา</label>
                  <input type="text" name="edit_drugallergy" value="<?php echo $row['drugallergy']  ?>"
                  class="form-control" placeholder="กรุณากรอกการแพ้ยา">
              </div>
              <div class="form-group">
                  <label>ประวัติการรักษา</label>
                  <input type="text" name="edit_history" value="<?php echo $row['history']  ?>"
                  class="form-control" placeholder="กรุณากรอกประวัติการรักษา">
              </div>
              <div class="form-group">
                  <label>ผู้ตรวจ</label>
                  <input type="text" name="edit_keeper" value="<?php echo $row['keeper']  ?>"
                  class="form-control" placeholder="กรุณากรอกชื่อผู้ตรวจ">
              </div>
              <a href="patient_list.php" class="btn btn-danger">ยกเลิก</a>
              <button type="submit" name="updatebtn_patient" class="btn btn-primary">อัพเดทข้อมูล</button>
            </form>
            <?php    
        }
    }
    ?>
    </div>
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>