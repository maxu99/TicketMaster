<?php namespace views;
require_once ("configFacebook.php");

if(!isset($_SESSION))
{
    session_start();
}
    $redirectURL = URl. "fb-callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginURL($redirectURL,$permissions);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!---------------------------------------------------------------------------------------------------------------------->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link type="text/css" href="../css/csslog.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Login</h2>
                <p>Please enter your email and password</p>
            </div>

            <form id="User" method="post" action="../User/searchUser">

                <div class="form-group">


                    <input type="email" class="form-control" name="mail" id="inputEmail" placeholder="Email Address">

                </div>

                <div class="form-group">

                    <input type="password" class="form-control" name="pass" id="inputPassword" placeholder="Password">

                </div>

                <button type="submit" class="btn btn-primary" >Login</button>

            </form>


            <div class="container" >
                <input class="btn btn-primary" type="button" onclick="window.location = '<?php echo $loginURL; ?>';" value="Login whit Facebook">

            </div>


            <?php
            if(isset($msg)){
                ?>
                <div class="alert alert-danger"><?php echo $msg;?></div>
                <?php
            }
            ?>
       </div></div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <div id="fb-root"></div>
    <!------ Include the above in your HEAD tag ---------->
</body>
</html>
