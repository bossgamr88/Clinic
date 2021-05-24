   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
       <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-briefcase-medical"></i>
       </div>
       <div class="sidebar-brand-text mx-3">คลินิกหมอณัฐพล-หมอขิง</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
       <a class="nav-link" href="dashboard.php">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="index.php">
         <i class="fas fa-user-circle"></i>
         <span>ข้อมูลส่วนตัว</span></a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="user.php">
         <i class="fas fa-users"></i>
         <span>ผู้ใช้ในระบบ</span></a>
     </li>

     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" 
       aria-expanded="true" aria-controls="collapsePages">
       <i class="fas fa-hospital-user"></i>
         <span>ข้อมูลคนไข้</span>
       </a>
       <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
         <a class="collapse-item" href="patient_list.php">แสดงข้อมูลคนไข้</a>
         <a class="collapse-item" href="index.php">ติดตามคนไข้</a>
         </div>
       </div>
     </li>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-pills"></i>
         <span>ข้อมูลยา</span>
       </a>
       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           <a class="collapse-item" href="index.php">ประเภทยา</a>
           <a class="collapse-item" href="index.php">แสดงข้อมูลยาทั้งหมด</a>
         </div>
       </div>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="users.php">
       <i class="fas fa-file-prescription"></i>
         <span>ใบสั่งยา & บิล</span></a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="users.php">
       <i class="fas fa-cog"></i>
         <span>ตั้งค่า Line bot</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

   </ul>
   <!-- End of Sidebar -->

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

       <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

         <!-- Sidebar Toggle (Topbar) -->
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
           <i class="fa fa-bars"></i>
         </button>

         <!-- Topbar Search -->
         <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
           <div class="input-group">
             <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
             <div class="input-group-append">
               <button class="btn btn-primary" type="button">
                 <i class="fas fa-search fa-sm"></i>
               </button>
             </div>
           </div>
         </form>
       </nav>
       <!-- End of Topbar -->


       <!-- Scroll to Top Button-->
       <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
       </a>


       <!-- Logout Modal-->
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
               </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

               <form action="logout.php" method="POST">

                 <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

               </form>


             </div>
           </div>
         </div>
       </div>