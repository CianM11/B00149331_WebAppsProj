<?php require_once 'templates/header.php';?>

    <title>Home page</title>
  </head>
  
  
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav class="navbar">
          <ul class="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="manage.php">Manage Account</a></li>
          </ul>
        </nav>
      </div>
      <div class="about">
        <div>
          <h2>Welcome to your cart.</h2>
          <p>See your selected items below.</p>

       


            <?php echo
            $_SESSION['Username'];?> </h1>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>

<?php require_once 'templates/footer.php';?>