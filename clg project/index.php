<!DOCTYPE html>
<html>
<head>
     <title>ADMINISTRATION LOGIN</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <a class="navbar-brand" href="login"><img src = "bg.png" style="width:200px;height:75px;"></a>
     <form action="login.php" method="post">
          <h2>LOGIN</h2>
          <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <label>User Name/ Email</label>
          <input type="text" name="uname" placeholder="User Name/ Email"><br>

          <label>User Name</label>
          <input type="password" name="password" placeholder="Password"><br>

          <button type="submit">Login</button>
     </form>
</body>
</html>