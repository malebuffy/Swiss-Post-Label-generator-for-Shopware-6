<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="stylesheet.css">

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name" class="ff-el-form-control"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password" class="ff-el-form-control"><br> 

        <button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style">Login</button>

     </form>

</body>

</html>