<!DOCTYPE html>
<html>
<head>
  <title>Profile - PhotoArt</title>
  <!-- will add stylesheets, js and php header and footers
   (STYLE THEM AND THEN WE CAN COPY AND PASTE THEM INTO A HEADER AND FOOOTER PHP PAGES LATER ON) -->
   <link rel="stylesheet" href="css/reset.css" />
   <link rel="stylesheet" href="css/general.css" />
   <link rel="stylesheet" href="css/paymentInfo.css" />
   <script type="text/javascript" src="script/checkRequired.js"></script>
   <script type="text/javascript" src="script/paymentInfoCheck.js"></script>
</head>
<body>
<?php require('../server_side/header.php'); ?>
  <div id="entireBG">
    <h2>Payment and Shipping Information</h2>
    <div id="sideBar">
      <img id="profileImg" src="profPic.jpg" alt="Profile Picture" title="Profile Picture">
      <a href="" id="changePic">Change Profile Picture</a>
      <!-- CHANGING PROFILE PICTURE HOWTO LINK: https://stackoverflow.com/questions/40441482/making-user-edited-profile-pictures-html -->
      <a href="PhotoArtProfilePage.html" class="sbarFunctions">Edit Profile</a>
      <a href="" class="sbarFunctions"><strong>Payment/Shipping Information</strong></a>
      <a href="" class="sbarFunctions">Log Out</a><!-- these buttons will have to have functionality added -->
    </div>
  <form method="post" action="../server_side/updatePaymentInfo.php"> <!-- profile.php will have to be changed to appropriate location -->
    <fieldset>
      <table>
        <tbody>
        <tr>
          <td><label>First Name</label></td>
          <td><label>Last Name</label></td>
          </tr>
        <tr>
          <td><input class="button1 required" type="text" name="firstName"/></td>
          <td><input class="button1 required" type="text" name="lastName"/></td>
        </tr>
        <tr><td colspan="2"><label>Shipping Address</label><td></tr>
        <tr><td colspan="2"><input class="shipping required" type="text" name="address"/></td></tr>
        <tr>
            <td><label>Country</label></td>
            <td><label>Province</label></td>
        </tr>
        <tr>
          <td>
            <select name="country" class="margin">
              <option value="CA">CA</option>
            </select></td>
          <td colspan="2">
            <select name="Province" class="margin">
              <option value="BC">BC</option>
              <option value="AB">AB</option>
              <option value="SK">SK</option>
              <option value="MB">MB</option>
              <option value="ON">ON</option>
              <option value="QC">QC</option>
              <option value="NB">NB</option>
              <option value="NS">NS</option>
              <option value="NL">NL</option>
              <option value="PE">PE</option>
            </select>
          </td>
        </tr>
        <tr><td><label>PostalCode</label></td><tr>
        <tr><td><input type="text" name="postal" value=""></td></tr>
        <tr><td colspan="2"><label>Email</label></td></tr>
        <tr><td colspan="2"><input class="button2 required" type="text" name="email"/></td></tr>
        <tr><td colspan="2"><label>Payment method</label></td></tr>
        <tr><td colspan="2">
          <select name="Payment">
            <option value="MasterCard">MasterCard</option>
            <option value="Visa">Visa</option>
          </select>
          </td> <!-- should be the type "password" or "text"? -->
        </tr>
        <tr><td><label>CardNumber</label></td>
            <td><label>Expiry Date</label></td>
            <td><label>CSV</label></td>
        </tr>
        <tr>  <td><input maxlength="16" class="button2 required" type="text" name="CardNumber"></td>
              <td><input class="button2" type="month" name="CardDate" value="2020-01" required></td>
              <td><input maxlength="3" class="button2 required" type="text" name="CardCSV"></td>
        </tr>
    </tbody></table>
    <button id="submit" type="submit" name="saveChanges" class="shadow">Save Changes</button>
    </fieldset>
  </form>
</div>
  <footer>
    <p>&copy; 2018 PhotoArt All Rights Reserved | Website created for COSC 360/304</p>
  </footer>
</body>
</html>
