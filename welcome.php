<?php
// Initialize the session
  include('config.php');
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}else{
    $ses_sql = mysqli_query($link,"SELECT * FROM users");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $barcode = $row['barcode'];    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
          <h3>It's your card number: </h3>
      <?php echo "<img class='img_barcode' alt='testing' src='./barcode.php?codetype=Code39&size=75&text=".$barcode."&print=true'/>"; ?> 
      <script type="text/javascript">
window.addEventListener('devicelight', function(e) {
  var lux = e.value;
 
  if(lux < 50) { // dim
    document.body.className = 'dim';
  }
  if(lux >= 50 && lux <= 1000) {
    document.body.className = 'normal';
  }
  if(lux > 1000)  { // bright
    document.body.className = 'bright';
  } 
})
</script>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>