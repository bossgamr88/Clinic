<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset=utf-8>
</head>


<body class="login">

    <div class="login_wrapper">

        <section class="login_content" style="...">
            <form name="form1" action="" method="post">
                <h1>User Login Form</h1><br>
                <div>
                    <input type="text" name="username" class="form-control" placeholder="Username" requied=""/>
                </div>
                <div>
                    <input type="password" name="password" class="form-control" placeholder="Password" requied=""/>
                </div>
                <div>
                    <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>
                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">New to site ?
                        <a href="registration.php">Create Account</a>
                    </p>
                <div class="clearfix"></div>

                </div>
            </form>
        </section>
        </div>

        <?php
            if(isset($_POST["submit1"]))
            {
                $count=0;
                $res=mysqli_query($link,"SELECT * FROM student_registration where username='$_POST[username]' && password='$_POST[password]'");
                $count=mysqli_num_rows($res);

                if($count==0)
                {
                    ?>
                    <div class="alert alert-danger col-lg-6 col-lg-push-3">
                        <strong style="color:white">Invalid</strong> Username Or Password
                    </div>
            <?php
                }
                else
                {
            ?>
            <script type="text/javascript">
                window.location="aa.php";
            </script>
            <?php
                }
           }
        ?>
</body>
</html>
