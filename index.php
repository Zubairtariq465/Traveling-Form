<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost" ;
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection to this database failed  due to ". mysqli_connect_error());

}
// echo "succes";
$name=$_POST['name'];
$age=$_POST['age'];
$Gender=$_POST['Gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc =$_POST['desc'] ;
$sql = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
('$name', '$age', '$Gender', '$email', '$phone',
 '$desc', current_timestamp());";
//  echo $sql;


 if($con->query($sql)==true){
    // echo "Seccusfully inserted";
    $insert = true;
    
 }
 else{
    echo"error: $sql <br> $con->error";
 }
   $con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bgg" src="bgg.jfif" alt="Government College">
    
    <div class="container">
        <h1> Welcome to College Trip  </h3>
        <p> Enter yor Details and submit this form to confirm your Participation in the Trip </p>
        <?php
        if($insert==true)   
        {
       echo "<p class='SubmitMsg'>  Thanks For Submiting your Form. We are Happy to see you joining US Trip</p>";
        }
        ?>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <input type="text" name="age" id="age" placeholder="Enter Your age">
        <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender">
        <input type="email" name="email" id="email" placeholder="Enter Your Email">
        <input type="phone" name="phone" id="phone" placeholder="Enter Your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter anyother Information here"></textarea>
        <button class="btn">Submit</button>
        

        </form>
    </div>
    <script src="index.js"></script>
</body>

</html> 