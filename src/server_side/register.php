<?php
include('connection.php');

  $check = true;
  $address= $_SERVER['HTTP_REFERER'];

  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if(isset($_POST['firstname'])&& isset($_POST['lastName'])&& isset($_POST['userName'])&& isset($_POST['regEmail'])&&isset($_POST['regPassword'])){
      $fName= $_POST['firstName'];
      $lName= $_POST['lastName'];
      $uName= $_POST['regUsername'];
      $email =$_POST['regEmail'];
      $pwd =$_POST['regPassword'];

    }
  }elseif($_SERVER["REQUEST_METHOD"]=="GET"){
$check = false;
    echo "wrong method";
    mysqli_close($con);
  }
if($check==true){
    $results=mysqli_query($con,"SELECT firstname,lastname,email from users");
    while($row = $results->fetch_assoc()){
      if((strcasecmp($row['firstname'],$fName)==0&&strcasecmp($row['lastname'],$lName==0))|| strcasecmp($row['email'],$email)==0){
        echo "<p> User already exists with this name and/or email</p>";
        echo "<a href =".$address."> Return to user entry</a>";
        $check = false;

      }
    }
    if($check ==true && $stmt=$con->prepare("INSERT into users (username,firstName,lastName,email,password) values(?,?,?,?,?)")){
        $hashed = md5($pwd);
       $stmt->bind_param('sssss',$uName,$fName,$lName,$email,$hashed);
       $stmt->execute();
       echo "<p> An accout for the user ". $uName. " has been created";
  }

}
mysqli_close($con);





 ?>
