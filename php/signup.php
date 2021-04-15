<?php
session_start();
include_once "config.php";
$fname=mysqli_real_escape_string($conn, $_POST['fname']);
$lname=mysqli_real_escape_string($conn, $_POST['lname']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    // lets check email is valid or not
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){    //If email is valid
        //lets check email already exists or not
        $sql =mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){  // check email exists or not
            echo "$email - already exists";
        }
        else{
            //lets check the upload file
            if(isset($_FILES['image'])){ //if file is uploaded
                $img_name =$_FILES['image']['name']; //getting user uploaded img name
               // $img_type =$_FILES['image']['type']; //getting user uploaded type
                $tmp_name=$_FILES['image']['tmp_name']; //this temporary name is used to save file in our folder 

                //let explode image and get the last extenssion like jpg
                $img_explode=explode('.',$img_name);
                $img_ext=end($img_explode); //here we get the extension of an user uploaded image file

                $extensions = ["png","jpg","jpeg"]; //these are some valid extension and wee store in array
                if(in_array($img_ext,$extensions)===true){ // if user uploaded any img extension is matched any array extensions
                    $time=time(); //this will return us current time..

                    //lets move the user uploaded img to our particular folder
                    $new_img_name =$time.$img_name;
                    if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                        $status="Active now"; //once user signed up then this status will be active)
                        $random_id = rand(time(),10000000); //creating random id for user

                        //lets insert all user data inside table 
                        $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id ,fname, lname, email, password, img, status)
                                            VALUES({$random_id}, '{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");

                            if($sql2){ //if these data inserted
                                $sql3 =mysqli_query($conn,"SELECT * from users where email = '{$email}' ");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row=mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id']=$row['unique_id']; //using this session we used user unique_id in another php file
                                    echo 'success';
                                }
                            }else{
                                echo "Something went wrong";
                            }
                        }
                }else{
                    echo "Please select an image file -jpg,jpeg,png";
                }
            }
            else{
                echo "Please select an image file";
            }
        }
    }else{
        echo $email ."- This is not a valid email";
    }
}
else{
    echo "All input fields are required";
}

?>