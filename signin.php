
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign in</title>
</head>
<body>
    <!-- Subper class include All sup classes -->

    <div class="log">
        <div class="information">

            <!-- title -->
            <span>MEGA</span>
            <h4 style="color:red;">Need To Signin To Access !</h4>

            <!-- Form Data -->

    <form action="signin.php" method="post">
         <h2 class="title">Sign In</h2>
         <select name="Session" class="Session">
                 <option value="1">Tetcher</option>
                 <option Value="2">Student</option>
        </select>
        <input type="text" placeholder="User Name" name="user_name" class="inp"><br>
        <input type="email" placeholder="Email" name="email" class="inp"><br>
        <input type="password" placeholder="Password" name="password" class="inp"><br>
        <input type="password" placeholder=" Confirm Password" name="conf_password" class="inp"><br>
        <input type="submit" value="Login" class="but" name="send" class="inp">
        <p>You Have Account ? <a href="login.php">Login</a></p>
        <input type="submit" value="Signin Google" class="but_google">
        <input type="submit" value="Signin Linkedin" class="but_Linked_in">
    </form>

    <!-- End Form -->
  </div>
 </div> 

 <!-- Create Code By Php LAnguage To Add And Cheched Users -->
<?php
if($_POST["send"]==true){
$conn=new mysqli("localhost","root","123456","test");// Connect Data Base
if($conn->connect_error){ // checkd Connection

    die("connection field".$conn->connect_error);

}
// Value inter By User Saved In Suber Global Var $_post
    $user_name=$_POST["user_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $conf_password= $_POST["conf_password"];
    $Session=$_post["Session"];

    //Create Statement To Add Data In Table signin
    $sql="insert into signin (user_name,email,password,conf_password,Session) values('$user_name','$email','$password','$conf_password','$Session')";
   /*Checked The Statement 
   If Statement (true) = Excuted Statment
   If Statement (false) = Not Excute Statment */

    if($conn->query($sql)==true){
        echo "<script>alert('Seccsesfull Signin')</script>";
    }else{

        echo" Not Done";
    }
}
?>

<!-- End Code -->
</body>
</html>