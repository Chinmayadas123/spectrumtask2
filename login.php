<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username'])) {
    header("location:index.php");
}
include("con.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
   $sql = "SELECT * FROM user WHERE email='$username' and password='$password'";
    $res = mysqli_query($con, $sql) or die("query failled");
    $cnt = mysqli_num_rows($res);
    if ($cnt > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['mail'] = $row['email'];
            $_SESSION['num'] = $row['mob'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['gen'] = $row['gender'];
            $_SESSION['branch'] = $row['branch'];
            $_SESSION['Year'] = $row['year'];
            $_SESSION['dom'] = $row['domain'];
            
            header('location:index.php');
        }
    } else {
        echo "<script>alert('Please enter correct details')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="log-box">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                        <h2>Login Here</h2>
                        <div class="form-box">
                            <label> Username</label>
                            <input type="text" name="username">
                        </div>
                        <div class="form-box">
                            <label> Password</label>
                            <input type="password" name="pass">
                        </div>
                        <div class="form-btn">
                            <input type="submit" name="submit" value="Login Here">
                        </div>
                        <div class="form-regb">
                            <h3>OR</h3>
                          <div class="btn">
                            <a role="button" href="register.php">Register Here</a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>