<?php 
    include("partial/header.php");
    include("env.php");
    include("partial/menu.php");
    $food_id = $_GET['food_id'];
    $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    $image_name=$row['image_name'];
?>

<section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Selesaikan Pesananmu</h2>

            <form action="" method="POST" class="row g-3">
                <fieldset>
                    <legend>Pilihan Makanan</legend>

                    <div class="food-menu-img">
                        <?php 
                        
                            //CHeck whether the image is available or not
                            if($image_name=="")
                            {
                                //Image not Availabe
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                //Image is Available
                                ?>
                                <img src="" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        
                        ?>
                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="form-control" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="form-outline mb-4">
                        <input type="text" id="full-name" class="form-control" required>
                        <label class="form-label" for="form4Example1">Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="contact" class="form-control" required>
                        <label class="form-label" for="form4Example1">No. Telpon</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="email" class="form-control" />
                        <label class="form-label" for="form4Example1">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="address" class="form-control" />
                        <label class="form-label" for="form4Example1">Alamat</label>
                    </div>
                    
                    <button type="submit" value="Konfirmasi Pesanan" class="btn btn-primary btn-block mb-4">Konfirmasi Pesanan</button>
                </fieldset>

            </form>
            </h2>
        </div>
</section>
<?php include("partial/footer.php")?>