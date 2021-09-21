<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../inc/css/login.css">
  <link rel="stylesheet" type="text/css" href="../inc/css/style.css">
</head>
<body> <?php include_once '../inc/header.php'; ?> 


<?php 

$con = mysqli_connect('localhost','root','','insan-school');

 if (isset($_POST['submit'])) {

$email= $_POST['email'];
 $password= $_POST['password'];


$search_email = " SELECT * FROM `adminlogin` WHERE email='$email' ";

$query = mysqli_query($con,$search_email);

$email_count = mysqli_num_rows($query);


if ($email_count) {

   $email_pass = mysqli_fetch_assoc($query);

  $db_pass = $email_pass['password'];

   $_SESSION['sl']= $email_pass['sl'];

 

  // $pass_decode = password_verify($password, $db_pass);

  if ($password==$db_pass){


      ?>

        <script type="text/javascript">
          location.replace("student_admission_list.php");
        </script>

      <?php 

  }


  else{
      echo "Password Incorrect";
  }

}


  else{
    echo "Email Incorrect";

}


}

?>


<section>
  <div class="container">
    <div class="row justify-content-center py-5">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Admin Login</h3>
          </div>
          <div class="card-body">
            <form class="m-3" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password">
              </div>

              <input type="submit" name="submit" class="btn btn-success" value="LOGIN NOW">
              <!-- <button class="btn btn-success" type="submit" name="submit">Log In</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</section> <?php include_once '../inc/footer.php'; ?>
</body>
</html>