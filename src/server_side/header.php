<?php
session_start();
if(isset($_SESSION['username'])){
  echo "<header>
    <a href='PhotoArtMain.php'><h1>PhotoArt</h1></a>
    <nav>
      <p>Hello, ". $_SESSION['username'] . "
      <a href='PhotoArtExplore.php' class='navBtns'>Explore</a>
      <a href='PhotoArtCart.php' class='navBtns'>Cart</a>
      <a href ='PhotoArtProfilePage.php' class='navBtns'>My Profile</a>
      <a href='../server_side/logout.php' class='navBtns'>Logout</a>
    </nav>
  </header>";
}else{

echo "<header>
  <a href='PhotoArtMain.php'><h1>PhotoArt</h1></a>
  <nav>
    <a href='PhotoArtExplore.php' class='navBtns'>Explore</a>
    <a href='PhotoArtCart.php' class='navBtns'>Cart</a>
    <a href='PhotoArtRegister.php' class='navBtns'>Register</a>
    <a href='../server_side/processLogin.php' class='navBtns'>Login</a>
  </nav>
</header>";
}
 ?>
