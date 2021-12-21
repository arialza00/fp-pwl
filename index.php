<?php include("partial/header.php"); include("env.php")?> 
<div class="p-5 mb-4 bg-light rounded-3" style="background:rgba(0, 0, 0, 1) url(/img/assets/background.jpeg) no-repeat center; background-size: cover; height: 600px;background-blend-mode: darken;">
  <div class="container text-center center-block">
    <h1 class="display-5 fw-bold mt-5 mb-5">Enjoy Your Favorite Snack<br>With Fast and Easy Delivery<br>With StarSnacks</h1>
    <p class="col fs-4 md-12">Find Your Favorite Snack</p>
      <div class="row g-3 align-items-center justify-content-center">
        <div class="col-sm-5">
          <input type="search" class="form-control rounded" placeholder="Search...">
        </div>         
        <div class="col-auto">
          <button class="btn btn-primary" type="button">Search</button>
        </div>
      </div>
  </div>
</div>   

<main>
  <div>
    <h1 class="text-center" style="padding-top: 50px;padding-bottom:25px">Our Popular Snacks</h1>
    <div class="container justify-content-center">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 rounded"style="background:url(img/assets/bakpia.jpeg) no-repeat;background-size: cover;">
          <div class="card-body text-center text-white">
            <h5 class="card-title fs-3" style="margin-top: 300px;">Bakpia Pathok</h5>
            <p class="card-text fs-5">Rp.15.000,-</p>
            <button type="button" class="btn btn-warning text-white">Order</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 rounded" style="background:url(img/assets/keripik.jpeg) no-repeat;background-size: cover;">
          <div class="card-body text-center position-absolute bottom-0 start-50 translate-middle-x text-white">
            <h5 class="card-title fs-3">Keripik Singkong</h5>
            <p class="card-text fs-5">Rp.9.000,-</p>
            <button type="button" class="btn btn-warning text-white">Order</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 rounded" style="background:url(img/assets/keripik_pisang.jpeg) no-repeat;background-size: cover;">
          <div class="card-body text-center position-absolute bottom-0 start-50 translate-middle-x text-white">
            <h5 class="card-title fs-3">Keripik Pisang</h5>
            <p class="card-text fs-5">Rp.13.000,-</p>
            <button type="button" class="btn btn-warning text-white">Order</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="">
    <h1 class="text-center" style="margin: 100px 0 100px 0;">Menu</h1>
  </div>
  <div>
    <h1 class="text-center" style="margin: 100px 0 100px 0;">What They Say About Us?</h1>
  </div>
</main>
<?php include("partial/footer.php")?> 