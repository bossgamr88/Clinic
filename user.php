<?php include "./includes/header.php" ?>
<?php include "./includes/navbar.php" ?>

<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Begin Page Content -->
                <div class="container-fluid"> 
                <!-- Page Heading -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                            เพิ่มข้อมูล
                          </button>
                  </h6>
                </div>
                <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="code.php" method="POST">

                        <div class="modal-body">

                            <div class="form-group">
                                <label>Firstname </label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                            <input type="hidden" name="type" value="admin">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
                     <?php 
                        $connection = mysqli_connect("localhost","root","","clinic");
                        $query = "SELECT * FROM data_user";
                        $query_run = mysqli_query($connection,$query); 
                    ?>
                     <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Type</th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
                              if(mysqli_num_rows($query_run) > 0)
                              {
                                while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                              <tr>
                              <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password'];  ?></td>
                                <td><?php echo $row['type'];  ?></td>
                                <td>
                                  <form action="register_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['username']; ?>" >
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                  </form>
                                </td>
                                <td>
                                  <form action="code.php" method="post">
                                      <input type="hidden" name="delete_id" value="<?php echo $row['username']; ?>">
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

<?php include "./includes/scritp.php" ?>
<?php include "./includes/footer.php" ?>
