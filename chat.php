<?php 
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location:login.php");
}
?>
<?php 
include_once "header.php";
?>
<body>
<div class="wrapper">
    <section class="chat-area">
    <?php
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql=mysqli_query($conn, "SELECT * FROM users where unique_id={$user_id}");
    if(mysqli_num_rows($sql)>0){
        $row=mysqli_fetch_assoc($sql);
    }
    ?>
        <header>
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="php/images/<?php echo $row['img']?>" alt="">
                <div class="details">
                <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                    <p><?php echo $row['status'] ?></p>
                </div>
        </header>
        <div class="chat-box">
            <!-- <div class="chat outgoing">
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,ratione consequuntur molestiae.</p>
                </div>
            </div>
            <div class="chat incoming">
                <img src="php/images/jack.jpg" alt="">
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,ratione consequuntur molestiae.</p>
                </div>
            </div> -->
        </div>
        <form action="#" class="typing-area">
        <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
        <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" class="input-field" name="message" placeholder="Type a message here......">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </section>
</div>    
<script src="javascript/chat.js"></script>
</body>
