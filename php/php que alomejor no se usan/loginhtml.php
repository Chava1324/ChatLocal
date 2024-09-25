<?php 
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
  exit(); // Agrega exit() después de redirigir para detener la ejecución
}
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="login_process.php" method="POST" enctype="multipart/form-data" autocomplete="off"> <!-- Agrega el action con el archivo de procesamiento -->
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div> <!-- Cambiado a "index.php" en lugar de "index.php" -->
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>
</html>


/*cambiar el nombre de este loginhtml.php por login.php