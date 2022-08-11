<html>
<body>
    <head>

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
    <title>Result</title>
    </head>
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
    <form action="result.php" method="POST">
    <h2 class="title">Result Student</h2>
            <input type="number" name="id" placeholder="Enter Td" class="inp"><br>
            <input type="submit" value="Result" name="send" class="but_addstd"><br><br>
    </form>
</div></div>
<?php


$conn=new mysqli("localhost","root","123456","test");
if($conn->connect_error){

    die("connection field".$conn->connect_error);

}
// Select Data From Table
$select = "SELECT * from result where id ='$id'" ;
$selectexe = mysqli_query($conn,$select);
?>
<table align="center" border="2" 
style=" background-color: rgb(6, 67, 252);
 color:#fff ; 
 width:80% ;
 align-items: center; 
 margin:110px;
 border-ridues:;
 " ;>
    <tr>
        <th> Id </th>
        <th> Name </th>
        <th> E-mail </th>
        <th> Java </th>
        <th> Php</th>
        <th> Network</th>
        <th> Database</th>
        <th> Avrage</th>
    </tr>
<?php
while($result = mysqli_fetch_assoc($selectexe)) {
    // var_dump($data);
    ?>
        <tr>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['id']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['name']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['email']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['java']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['php']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['network']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['database']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['Avrage']; ?> </td>
        </tr>
    <?php
}//END while($data = mysqli_feach_acc($selectexe))

?>
</div>

</table>
</body>
</html>