<?php
  include("partial/header.php");
  include("env.php");

  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
  }

  $result = mysqli_query($con, "SELECT * FROM tbl_admin WHERE username ='$username' AND password = '$password'");

  if($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: admin-index.php");
  }else{
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
  }
?>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class=" col-lg-6 col-xl-6 my-lg-5 py-lg-5">
            <img src="img/assets/download.png" class="img-fluid text-center" alt="">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1 my-lg-5 py-lg-5">
            <form action="" method="post"> 
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Enter a Username">
                <label class="form-label" for="username">Username</label>
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter a Password">
                <label class="form-label" for="password" >Password</label>
              </div>
  
              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3">
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a>
              </div>
  
              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" name="login" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php" class="link-danger">Register</a></p>
              </div>
  
            </form>
          </div>
        </div>
      </div>
<?php include("partial/footer.php")?>