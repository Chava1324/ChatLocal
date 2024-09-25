<?php
session_start();
include_once "php/config.php";
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
          if ($sql) {
            if (mysqli_num_rows($sql) > 0) {
              $row = mysqli_fetch_assoc($sql);
            }
          } else {
            echo "Error en la consulta SQL: " . mysqli_error($conn);
            echo "Consulta SQL: " . "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}";
          }
          ?>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
    </section>
  </div>
  <script src="javascript/users.js"></script>
</body>

</html>