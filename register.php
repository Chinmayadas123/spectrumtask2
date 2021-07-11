<?php
$msg = "";
if (isset($_POST['submit'])) {
    include("con.php");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mail = mysqli_real_escape_string($con, $_POST['email']);
    $phno = mysqli_real_escape_string($con, $_POST['phno']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gen = mysqli_real_escape_string($con, $_POST['gen']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $domain = mysqli_real_escape_string($con, $_POST['domain']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $cfpass = mysqli_real_escape_string($con, $_POST['cfpass']);

    $sql = "SELECT email FROM user WHERE email='{$mail}'";

    $res = mysqli_query($con, $sql) or die("Query failed");

    if (mysqli_num_rows($res) > 0) {
        echo "<p style='color:red;text-align:center;margin:10px 0;'> User Already Exist </p>";
    } else if ($pass == $cfpass) {
        $sql1 = "INSERT INTO user(username,email,mob,dob,gender,branch,year,domain,password) VALUES('{$name}','{$mail}',{$phno},'{$dob}','{$gen}','{$branch}','{$year}','{$domain}','{$pass}')";
        $res1 = mysqli_query($con, $sql1);
        if ($res1) {
            echo "<script> alert('Successfully registred')</script>";
            header("location:login.php");
        }
    } else {
        $msg = "***password not matched";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body id="registerb">
    <section id="register">
        <div class="container">
            <div class="reg-box">
                <form action="<?php $_SERVER['PHP_SELF']; ?> " autocomplete="off" id="form" method="POST">
                    <div class="heading">
                        <h3>Register Here</h3>
                    </div>
                    <div class="inform">
                        <div class="inform-box">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="ex@ chinmay " id="name" required>

                        </div>
                        <div class="inform-box">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="ex@ chiuu123@gmail.com" id="mail" required>

                        </div>
                        <div class="inform-box">
                            <label>Mobile</label>
                            <input type="text" name="phno" pattern="[5-9]{1}[0-9]{9}" id="num" placeholder="ex@ 8097675769" required>

                        </div>
                        <div class="inform-box">
                            <label>DOB</label>
                            <input type="date" name="dob" id="dob" required>

                        </div>
                        <div class="inform-box">
                            <label>Gender</label>
                            <select name="gen" id="Gender">
                                <option disabled>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>

                            </select>
                        </div>
                        <div class="inform-box">
                            <label>Branch</label>
                            <input type="text" name="branch" placeholder="ex@ MCA" id="bnc" required>

                        </div>
                        <div class="inform-box">
                            <label>Year</label>
                            <input type="text" name="year" placeholder="ex@ 1st ,2nd...year" id="year" required>

                        </div>
                        <div class="inform-box">
                            <label>Domain</label>
                            <select name="domain" id="dom">
                                <option disabled>Select Domain</option>
                                <option>web developer</option>
                                <option>python developer</option>
                                <option>ML</option>
                                <option>AI</option>
                                <option>UI/UX design</option>
                                <option>Java developer</option>
                                <option>Android developer</option>
                            </select>
                        </div>
                        <div class="inform-box">
                            <label>Password</label>
                            <input type="password" name="pass" id="pass" required>

                        </div>
                        <div class="inform-box" id="conf">
                            <label>Confirm Password</label>
                            <input type="password" name="cfpass" id="confpass" required>
                            <?php echo "<span style='color:red;text-align:right;'>{$msg}</span>"; ?>
                        </div>
                        <div class="inform-btn">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                        <div class="reg">
                            <p>If already registred</p>
                            <div class="btn">
                                <a role="button" href="login.php">Login Here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>