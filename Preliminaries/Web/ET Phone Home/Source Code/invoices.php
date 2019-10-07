<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Management Panel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Admin Management Panel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="invoices.php">Invoices
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="assets.php">Assets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
            require_once('functions.php');
        
            if(getUserIP() === "127.0.0.1") {
        ?>
            <h1 class="mt-5">Invoices</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr><th>ID</th><th>Date</th><th>Creator</th><th>Description</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    <tr><td colspan="5">No results found.</td></tr>
                </tbody>
            </table>
        <?php
            } else {
                echo "<p style=\"text-align: left\">An error has occured.<br>If this problem persists, please message the developers of the website with the following piece of information:<br><code>" . base64_encode(implode('|',array(date('c'), base64_encode(var_export($_SERVER, TRUE)), "IP ".getUserIP()." is not allowed to access this page."))) . "</code></p>\n\n";
        ?>
            <script>
                // Home is where the heart is
                window.location.replace("forbidden.html");
            </script>
        <?php
            }
        ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
