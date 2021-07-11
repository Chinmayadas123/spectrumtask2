<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body id="ubody">
   <section class="users">
   <div class="container">
       <div class="row headw">
           <?php echo"<h2>Welcome {$_SESSION['username']}</h2>";?>
         <div class="goback">
         <a href="index.php">
           Go to Home
           </a>
         </div>
       </div>
       <div class="row udet">
           <div class="user-tab">
           <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">Description</th>
                <th scope="col">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Name</th>
                <?php echo "<td>{$_SESSION['username']}</td>";?>
              </tr>
              <tr>
                <th scope="row">Mail</th>
                <?php echo "<td>{$_SESSION['mail']}</td>";?>
              </tr>
              <tr>
                <th scope="row">Mobile</th>
                <?php echo "<td>{$_SESSION['num']}</td>";?>
              </tr>
              <tr>
                <th scope="row">DOB</th>
                <?php echo "<td>{$_SESSION['dob']}</td>";?>
              </tr>
              <tr>
                <th scope="row">Gender</th>
                <?php echo "<td>{$_SESSION['gen']}</td>";?>
              </tr>
              <tr>
                <th scope="row">Branch</th>
                <?php echo "<td>{$_SESSION['branch']}</td>";?>
              </tr>
              <tr>
                <th scope="row">Year</th>
                <?php echo "<td>{$_SESSION['Year']}</td>";?>
              </tr>
              <tr>
                <th scope="row">Domain</th>
                <?php echo "<td>{$_SESSION['dom']}</td>";?>
              </tr>
            </tbody>
          </table>
           </div>
       </div>
    </div>
   </section>
</body>
</html>