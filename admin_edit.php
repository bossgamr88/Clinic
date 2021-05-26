<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> แก้ไขข้อมูลผู้ใช้ในระบบ </h6>
  </div>

    <div class="card-body">
    <?php 
    $connection = mysqli_connect("localhost","root","","clinic");
    if(isset($_POST['edit_btn'])){
        $id = $_POST['edit_id'];
        // echo $id;
        $query = "SELECT * FROM data_user WHERE ID='$id' ";
        $query_run = mysqli_query($connection,$query);
    
        foreach($query_run as $row){
            ?>
            <form action="code.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $row['ID']  ?>">
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
                  <label>ชื่อผู้ใช้</label>
                  <input type="text" name="edit_username" value="<?php echo $row['username']  ?>"
                  class="form-control" placeholder="กรุณากรอกชื่อผู้ใช้">
              </div>
              <div class="form-group">
                  <label>รหัสผ่าน</label>
                  <input type="text" name="edit_password" value="<?php echo $row['password']  ?>"
                  class="form-control" placeholder="กรุณากรอกรหัสผ่าน">
              </div>
              <div class="form-group">
                <label>สถานะ</label>
                <select name="type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
              </div>
              <a href="admin_users.php" class="btn btn-danger">ยกเลิก</a>
              <button type="submit" name="updatebtn" class="btn btn-primary">อัพเดทข้อมูล</button>
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