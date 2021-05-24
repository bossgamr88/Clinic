<?php 
//include('security.php');

// session_start();
    $connection = mysqli_connect("localhost","root","","clinic");

    if(isset($_POST['registerbtn'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cppassword = $_POST['confirmpassword'];
        $type = $_POST['type'];

        if($password === $cppassword){
            $query = "INSERT INTO data_user(firstname,lastname,username,password,type) VALUES ('$firstname','$lastname','$username','$password','$type')";
            $query_run = mysqli_query($connection,$query);  
            if($query_run){
                // echo "Saved"; 
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: user.php');
            }
            else
            {
                // echo "Not Saved"
                $_SESSION['status'] = "Admin Profile Added";
                header('Location: register.php');
            }
        }else{
            $_SESSION['status'] = "Password and Comfirm Password Dose Not Match";
            header('Location: register2.php');
        }    
    }


     // Login code (logincode.php)
     if(isset($_POST['login_btn']))
     {
         $username_login = $_POST['username'];
         $password_login = $_POST['password'];
 
         $query = "SELECT * FROM data_user WHERE username='$username_login' AND password='$password_login' ";
         $query_run = mysqli_query($connection,$query);
         $usertypes = mysqli_fetch_array($query_run);
 
         
         if($usertypes['type'] == "admin")
         {
             $_SESSION['username'] = $username_login;
             header('Location: dashboard.php');
         }
         else if($usertypes['type'] == "user")
         {
             $_SESSION['username'] = $username_login;
             header('Location: ./users/user_page.php');
         }
         else
         {
             $_SESSION['status'] = "Email id / Password is Invalid";
             header('Location: login.php');
         }
        
     }


     //Add data Patient
     if(isset($_POST['patient_btn']))
     {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $IDcard = $_POST['id_card'];
        $Age = $_POST['age'];
        $Tel = $_POST['tel'];
        $Congenital = $_POST['congenital'];
        $Address = $_POST['address'];
        $DrugAllergy = $_POST['drugallergy'];
        $History = $_POST['history'];
        $Keeper = $_POST['keeper'];

        $query = "INSERT INTO data_patient(firstname, lastname, id_card, age, tel, congenital, address, 
        drugallergy, history, keeper) 
        VALUES ('$firstname','$lastname','$IDcard','$Age','$Tel','$Congenital','$Address','$DrugAllergy','$History','$Keeper')";
        $query_run = mysqli_query($connection,$query);  
            if($query_run){
                // echo "Saved"; 
                $_SESSION['success'] = "เพิ่มข้อมูลเรียบร้อยแล้ว";
                header('Location: patient_list.php');
            }
            else
            {
                // echo "Not Saved"
                $_SESSION['status'] = "Admin Profile Added";
                header('Location: register.php');
            }
    }

 

?>