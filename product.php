<?php include("partial/header.php"); include("env.php");include("partial/menu.php")?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center" style="margin-top: 10px;margin-bottom:10px;">
            <div class="card" style="width: 18rem;">
            <?php 
                    //Display Foods that are Active
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
                    if($image_name=="")
                    {
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                    ?>
                <img src="img/assets/<?php echo $image_name; ?> <?php }?>" class="card-img-top " alt="..." style="height: 260px;width:260px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text">Rp.<?php echo $price; ?></p>
                    <a href="order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order</a>
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
            <div class="card" style="width: 18rem;">
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
                    if($image_name=="")
                    {
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                    ?>
                <img src="img/assets/<?php echo $image_name; ?> <?php }?>" class="card-img-top " alt="..." style="height: 260px;width:260px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text">Rp.<?php echo $price; ?></p>
                    <a href="order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order</a>
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
            <div class="card" style="width: 18rem;">
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
                    if($image_name=="")
                    {
                        echo "<div class='error'>Image not Available.</div>";
                    }
                    else
                    {
                    ?>
                <img src="img/assets/<?php echo $image_name; ?> <?php }?>" class="card-img-top " alt="..." style="height: 260px;width:260px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text">Rp.<?php echo $price; ?></p>
                    <a href="order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order</a>
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
<?php include("partial/footer.php") ?>