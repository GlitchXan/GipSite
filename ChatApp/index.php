<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<?php include_once "navbargip.php"; ?>
<div class="chatarea">
  <div class="wrapper" >
  <div class="chatwindow">
    <section class="form signup">
      <header>ChatApp Gip</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Voornaam</label>
            <input type="text" name="fname" placeholder="Voornaam" required>
          </div>
          <div class="field input">
            <label>Achternaam</label>
            <input type="text" name="lname" placeholder="Achternaam" required>
          </div>
        </div>
        <div class="field input">
          <label>E-mailadres</label>
          <input type="text" name="email" placeholder="Email" required>
        </div>
        <div class="field input">
          <label>Wachtwoord</label>
          <input type="password" name="password" placeholder="Nieuw Wachtwoord" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Profielfoto</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Account Maken">
        </div>
      </form>
      <div class="link">Heb je al een account? <a href="login.php">Inloggen</a></div>
    </section>
  </div>
  
  
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  
</body>
</html>
