<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/general.css" />

<?php
require("../server_side/connection.php");
require("../server_side/header.php");
?>
<form method='post' action='ListAllCustomer.php'><input type= 'text' name='searchBar' placeholder='Usersearch' class='shadow'/>
<button type='submit'>Search</button></form>
<?php
if(isset($_POST['searchBar'])){
  $search=$_POST['searchBar'];

  if($sql=$con->prepare("SELECT username, firstName,lastName,email from User where username like '%".$search."%'")){
      
      $sql->execute();
      $sql->bind_result($uName,$fName,$lName,$email);
      $sql->fetch();
echo "<table><tr><th>Username</th><th>First name</th><th>Last Name</th><th>Email</th><th>EditProfile</th><th>Remove</th></tr>"
      ."<tr><td>".$uName."</td><td>".$fName."</td><td>".$lName."</td><td>".$email."</td>"
          ."<td><a href='PhotoArtEditProfileAdmin.php?username=".$uName."'>Edit</a></td><td><a href='../server_side/removeUser.php?username=".$uName."' >Remove</a></td></tr>"
          ."</table";
  }else{
    echo "bad";
  }
}else{
$results=mysqli_query($con,"SELECT * from User");
echo "<table><tr><th>Username</th><th>First name</th><th>Last Name</th><th>Email</th><th>EditProfile</th><th>Remove</th></tr>";
while($row = $results->fetch_assoc()){
  echo "<tr><td>".$row['username']."</td><td>".$row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['email']."</td>"
      ."<td><a href='PhotoArtEditProfileAdmin.php?username=".$row['username']."'>Edit</a></td><td><a href='../server_side/removeUser.php?username=".$row['username']."' >Remove</a></td></tr>";
}
echo "</table>";
}
$con->close();
 ?>
