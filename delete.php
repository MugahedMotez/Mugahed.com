<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <title>Home</title>
</head>
<body>
    <header>
        <a href="home.html" class="logo">MEGA</a>
        <nav class="nav">
            <a href="#main">Home</a>
            <a href="#service">Courses</a>
            <a href="info.html">Campus</a>
            <a href="#">Cratfiction</a>
            <a href="#">About</a>
        </nav>
        </header>
        <div class="log">
          <div class="information">
          <span>MEGA</span>
    <form action="delete.php" method="post">
    <h2 class="title">Delete Student</h2>
            <input type="text" name="first-name" placeholder="Enter First Name" class="inp"><br>
            <input type="submit" value="Delete" name="delete" class="but_addstd"><br><br>
    </form>
    </div>
</div>
    <?php
    
if($_POST["delete"]==true){
$conn=new mysqli("localhost","root","123456","test");
if($conn->connect_error){

    die("connection field".$conn->connect_error);

}
    $f_name=$_POST["first-name"];
    $sql="DELETE  FROM std where f_name = '$f_name'";
    if($conn->query($sql)==true){
        echo "<script>alert('Delete Seccsessfull')</script>";
    }else{

        echo "<script>alert('!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!')</script>";
    }
}
?>
</body>
</html>

