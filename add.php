
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <title>Add New Student</title>
</head>
<body>
    <header>
        <a href="motherbord.html" class="logo">MEGA</a>
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
    <form action="add.php" method="post">
    <h2 class="title">Add Student</h2>
            <input type="text" name="first-name" placeholder="Enter First Name" class="inp"><br>
            <input type="text" name="last-name" placeholder="Enter Last Name" class="inp"><br>
            <input type="text" name="middle-name" placeholder="Enter Middle Nme"class="inp"><br>
            <input type="number" name="phone" placeholder="+249" class="inp"><br>
            <label>What Are You Studening</label><br>
                <select name="studing" class="Session">
            <option value="1">It</option>
            <option value="2">Medcine</option>
            <option value="3">Engenering</option>
                </select><br>
            <label>Academic Year</label><br>
            <select name="year" class="Session">
        <option value="1">First year</option>
        <option value="2">Seconed year</option>
        <option value="3">Theard year</option>
        <option value="4">Forth year</option>
            </select>
        <label>Gender</label><br>
        <select name="gender"  class="Session">
         <option value="1">Male</option>
         <option value="2">Female</option>
        </select>
            <input type="submit" value="Add Student" name="send" class="but_addstd"><br><br>
    </form>
    </div>
</div>
    <?php
    
    if($_POST["send"]==true){
$conn=new mysqli("localhost","root","123456","test");
if($conn->connect_error){

    die("connection field".$conn->connect_error);

}
    $f_name=$_POST["first-name"];
    $l_name=$_POST["last-name"];
    $m_name=$_POST["middle-name"];
    $year= $_POST["year"];
    $section =$_POST["studing"];
    $phone =$_POST["phone"];
    $gender=$_POST["gender"];
    $sql="insert into std (f_name,l_name,m_name,phone,gender,section,year) values('$f_name','$l_name','$m_name','$phone','$gender','$section','$year')";
    if($conn->query($sql)==true){
        echo "<script>alert('Seccsesfull Data In Table')</script>";
    }else{

        echo" Not Done";
    }
}
?>
</body>
</html>

