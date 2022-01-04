<?php include("partial/header.php"); include("env.php");include("partial/menu.php")?> 
<div class="p-5 mb-4 bg-light rounded-3" style="background: url(img/assets/background.jpeg) no-repeat center; background-size: cover; height: 600px;">
  <div class="container text-center center-block">
    <h1 class="display-5 fw-bold" style="padding-top: 100px;">Enjoy Your Favorite Snack<br>With Fast and Easy Delivery<br>With StarSnacks</h1>
  </div>
</div>   

<main>
  <div class="">
    <h1 class="text-center" style="padding-top: 50px;padding-bottom:25px">Our Popular Snacks</h1>
      <div class="container justify-content-center">
        <div class="row row-cols-1 row-cols-mb-3 g-4 justify-content-center ">
        
                  <?php
                  $sql = "SELECT * FROM tbl_food WHERE id='1'";

                  //Execute the Query
                  $res=mysqli_query($con, $sql);

                  //Count Rows
                  $count = mysqli_num_rows($res);

                  //CHeck whether the foods are availalable or not
                  if($count>0)
                  {
                      //Foods Available
                      while($row=mysqli_fetch_assoc($res))
                      {
                          //Get the Values
                          $id = $row['id'];
                          $title = $row['title'];
                          $description = $row['description'];
                          $price = $row['price'];
                          $image_name = $row['image_name'];
                          ?>
                          <?php 
                  //CHeck whether image available or not
                  if($image_name=="")
                  {
                      //Image not Available
                      echo "<div class='error'>Image not Available.</div>";
                  }
                  else
                  {
                  //Image Available
                  ?>
          <div class="col-4"style="height: 300px; width:300px">
                  
            <div class="card h-100 rounded"style="background:url(img/assets/<?php echo $image_name; ?> <?php }?>); no-repeat ; background-size: cover;">
              <div class="card-body text-center text-white">
                <h5 class="card-title fs-3" style="margin-top: 140px;"><?php echo $title; ?></h5>
                <p class="card-text fs-5">Rp.<?php echo $price; ?>,-</p>
                <button type="button" href="order.php?food_id=<?php echo $id; ?>" class="btn btn-warning text-white">Order</button>
              </div>
            </div>
            <?php
                        }
                    }
                    else
                    {
                        //Food not Available
                        echo "<div class='error'>Food not found.</div>";
                    }
                ?>
          </div>
          <div class="col-4"style="height: 300px; width:300px">
          <?php 
                    //Display Foods that are Active
                    $sql = "SELECT * FROM tbl_food WHERE id='2'";

                    //Execute the Query
                    $res=mysqli_query($con, $sql);

                    //Count Rows
                    $count = mysqli_num_rows($res);

                    //CHeck whether the foods are availalable or not
                    if($count>0)
                    {
                        //Foods Available
                        while($row=mysqli_fetch_assoc($res))
                        {
                            //Get the Values
                            $id = $row['id'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $price = $row['price'];
                            $image_name = $row['image_name'];
                            ?>
                            <?php 
                    //CHeck whether image available or not
                    if($image_name=="")
                    {
                        //Image not Available
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                    //Image Available
                    ?>
            <div class="card h-100 rounded"style="background:url(img/assets/<?php echo $image_name; ?> <?php }?>); no-repeat ; background-size: cover;">
              <div class="card-body text-center text-white">
                <h5 class="card-title fs-3" style="margin-top: 140px;"><?php echo $title; ?></h5>
                <p class="card-text fs-5">Rp.<?php echo $price; ?>,-</p>
                <button type="button" href="order.php?food_id=<?php echo $id; ?>" class="btn btn-warning text-white">Order</button>
              </div>
            </div>
            <?php
                        }
                    }
                    else
                    {
                        //Food not Available
                        echo "<div class='error'>Food not found.</div>";
                    }
                ?>
          </div>
          <div class="col-4"style="height: 300px; width:300px">
          <?php 
                    //Display Foods that are Active
                    $sql = "SELECT * FROM tbl_food WHERE id='3'";

                    //Execute the Query
                    $res=mysqli_query($con, $sql);

                    //Count Rows
                    $count = mysqli_num_rows($res);

                    //CHeck whether the foods are availalable or not
                    if($count>0)
                    {
                        //Foods Available
                        while($row=mysqli_fetch_assoc($res))
                        {
                            //Get the Values
                            $id = $row['id'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $price = $row['price'];
                            $image_name = $row['image_name'];
                            ?>
                            <?php 
                    //CHeck whether image available or not
                    if($image_name=="")
                    {
                        //Image not Available
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                    //Image Available
                    ?>
            <div class="card h-100 rounded"style="background:url(img/assets/<?php echo $image_name; ?> <?php }?>); no-repeat ; background-size: cover;">
              <div class="card-body text-center text-white">
                <h5 class="card-title fs-3" style="margin-top: 140px;"><?php echo $title; ?></h5>
                <p class="card-text fs-5">Rp.<?php echo $price; ?>,-</p>
                <button type="button" href="order.php?food_id=<?php echo $id; ?>" class="btn btn-warning text-white">Order</button>
              </div>
            </div>
            <?php
                      }
                  }
                  else
                  {
                      //Food not Available
                      echo "<div class='error'>Food not found.</div>";
                  }
              ?>
              </div>
          </div>
        </div>
  </div>
</main>
<?php include("partial/footer.php")?> 