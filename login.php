<?php
session_start();
if(isset($_SESSION['unique_id'])){
header("location:users.php");
}
?><?php 
include_once "header.php";
?>
<body>
<div class="wrapper">
    <section class="form login">
        <header>RealTime ChatApp</header>
        <form action="#" autocomplete="off">
            <div class="error-txt">This is an error message</div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email address">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to chat">
                </div>
        </form>
        <div class="link">Not yet Signed up? <a href="index.php">Signup now</a></div>
    </section>
</div>    
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>