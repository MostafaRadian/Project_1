<?php
error_reporting(0);
session_start();
if(isset($_POST['email']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  // echo "<pre>";
  // print_r($_POST);
  // die;
  //1 connection
  $connect=mysqli_connect("localhost","root","","Dash_Board2");
  //2 quariy

  $q="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

  $myq=mysqli_query($connect,$q);

  $userdata=mysqli_fetch_assoc($myq);

  if(isset($userdata)> 0){

  $_SESSION['user']=$userdata;
  if(isset($_SESSION['user']))
  {
    header("LOCATION:admin/article_management.php");
  }
}

}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>English Capsules Blog Log in</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="admin/design/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="admin/design/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="admin/design/bower_components/Ionicons/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="admin/design/dist/css/AdminLTE.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="admin/design/plugins/iCheck/square/blue.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>
 <body class="hold-transition login-page">
 <div class="login-box">
   <div class="login-logo">
     <a href="#"><b>English Capsules Blog</b></a>
   </div>
   <!-- /.login-logo -->
   <div class="login-box-body">
     <p class="login-box-msg">Sign in to start your session</p>

     <form action="login.php" method="post">
       <div class="form-group has-feedback">
         <input type="email" name="email" class="form-control" placeholder="Email">
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       </div>
       <div class="form-group has-feedback">
         <input type="password" name="password" class="form-control" placeholder="Password">
         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
       </div>
       <div class="row">
         <div class="col-xs-8">
           <div class="checkbox icheck">
             <label>
               <input type="checkbox"> Remember Me
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-xs-4">
           <input type="submit" name="signin" value="Sign In"class="btn btn-primary btn-block btn-flat">
         </div>
         <!-- /.col -->
       </div>
     </form>

     <div class="social-auth-links text-center">
       <p>- OR -</p>
       <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
         Facebook</a>
       <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
         Google+</a>
     </div>
     <!-- /.social-auth-links -->

     <a href="#">I forgot my password</a><br>
     <a href="register.php" class="text-center">Register a new membership</a>

   </div>
   <!-- /.login-box-body -->
 </div>
 <!-- /.login-box -->

 <!-- jQuery 3 -->
 <script src="admin/design/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="admin/design/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- iCheck -->
 <script src="admin/design/plugins/iCheck/icheck.min.js"></script>
 <script>
   $(function () {
     $('input').iCheck({
       checkboxClass: 'icheckbox_square-blue',
       radioClass: 'iradio_square-blue',
       increaseArea: '20%' /* optional */
     });
   });
 </script>
 </body>
 </html>