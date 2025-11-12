  <?php 


  include "connection.php";

// initialize variable (avoid undefined warning)

  $error = "";

// Check if form submittedi
if (isset($_POST['signupbtn'])) {
    // Get form data safely
    $username = mysqli_real_escape_string($conn,($_POST['username']));
    $email = mysqli_real_escape_string($conn,($_POST['email']));
    $password = mysqli_real_escape_string($conn,($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn,($_POST['cpassword']));



    // Validate
    if (empty($username)) {
        $error = " Username field is required";
    } elseif (empty($email)) {
         $error = " Email field is required";
    } elseif (empty($password)) {
         $error = " Password field is required";
    } elseif ($password !== $cpassword) {
         $error = " Passwords do not match";
    }  
      $sql= "INSERT INTO `signup`(`username`, `email`, `password`, `cpassword`) VALUES ('$username','$email','$password','$c_password')";
      $result =mysqli_query($conn, $sql);
      if($result){
      echo "  data submit";
      }else{
      echo "  data submit failed";
}
}

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="script.js"></script>
      <title>Signup-page</title>
  </head>

  <body>
      <input type="button" value="jquery" class="jquerybtn">
      <div class="signup">

          <!-- Form -->

          <form method="POST" class="mx-auto border p-4 rounded" style="max-width:500px;" id="signup">
            <p>
                  <?php 
                    if ($result) {
                        echo $error;
                    } 
                   ?>
              </p>


              <h2 class=" mb-3">Signup </h2>

              <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" require>
              </div>

              <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" require>
              </div>

              <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" require>
              </div>

              <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control" name="cpassword" require>
              </div>

              <button type="submit" class="btn btn-primary" name="signupbtn" id="submit">Submit</button>
              <button  type="button" class="btn btn-secondary" name="login" id="login"><a class="text-white" href="login.php">login</a></button>

          </form>
      </div>

  </body>

  </html>