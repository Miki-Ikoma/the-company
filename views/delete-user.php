<?php
  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User</title>

  <!-- CDN CSS-Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CDN Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../assets/css/style.css">

<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 88px">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
      <div class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
        <form action="../actions/logout.php" method="post" class="d-flex ms-2">
          <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
        </form>
      </div>
    </div>
  </nav>

  <main class="row justify-content-center gx-0">
    <div class="col-4 text-center">
      <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
      <h2 class="text-danger mb-5">DELETE ACCOUNT</h2>
      <p class="fw-bold">Are you sure you want to delete your account?</p>

      <div class="row">
        <div class="col">
          <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
        </div>
        <div class="col">
          <form action="../actions/delete-user.php" method="post">
            <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </main>

<!-- CDN JS-Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
