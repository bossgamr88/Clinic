<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset=utf-8>
</head>


<body class="login" stype="...">

    <div class="login_wrapper">

        <section class="login_content" style="...">
            <form name="form1" action="" method="post">
                <h2>User Registration Form</h2><br>

                <div>
                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Lastname" name="lastname" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Username" name="username" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Password" name="password" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Email" name="email" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Contract" name="contract" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Sem" name="sem" requied=""/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Enrollment NO" name="enrollmentno" requied=""/>
                </div>
                <div class="col-lg-12 col-lg-push-3">
                    <input class="btn btn-default submit" type="submit" name="submit1" value="Register">
                <div>

            </form>
        </section>

        <?php
    
        if(isset($_POST["submit1"]))
        {
            mysqli_query($link,"INSERT INTO student_registration (`firstname`, `lastname`, `username`, `password`, `email`, `contract`, `sem`, `enrollmentno`) values('$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[email]','$_POST[contract]', '$_POST[sem]', '$_POST[enrollmentno]')")
        ?>
            <div class="alert alert-success col-lg-12 col-lg-push-0">
                Registration successfully, You will get email when your account is approved
            </div>
        <?php
        }
        
        ?>
    </div>
</body>
</html>
