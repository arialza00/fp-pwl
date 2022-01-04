<?php 
  include("partial/header.php");
  include("partial/menu.php");
  require("env.php");
  require("functions.php");
  
  if(isset($_POST["contact"])){
    if(contactform($_POST)>0){
        echo"<script>
                alert('user baru berhasil ditambahkan');
            </script>";
    }else{
        echo mysqli_error($con);
    }
}
?>
<div class="container py-4">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" action="" method="post">

    <!-- Name input -->
    <div class="mb-3">
      <label class="form-label" for="name">Name</label>
      <input class="form-control" name="nama" id="name" type="text" placeholder="Name" data-sb-validations="required" />
      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" name="pesan" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
    </div>

    <!-- Form submissions success message -->
    <div class="d-none" id="submitSuccessMessage">
      <div class="text-center mb-3">Form submission successful!</div>
    </div>

    <!-- Form submissions error message -->
    <div class="d-none" id="submitErrorMessage">
      <div class="text-center text-danger mb-3">Error sending message!</div>
    </div>

    <!-- Form submit button -->
    <div class="d-grid">
      <button class="btn btn-primary" name="contact" id="submitButton" type="submit">Submit</button>
    </div>

  </form>

</div>
<?php include("partial/footer.php");?>