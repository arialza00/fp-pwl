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
            <div class="row">
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
            <input type="text" id="full-name" placeholder="Nama" class="form-control" required>
        </div>
        <div class="form-outline mb-4">
            <input type="tel" id="contact" placeholder="No. Telpon" class="form-control" required>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="email" placeholder="Email" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="address" placeholder="Alamat" class="form-control" />
        </div>
        <!-- Default radio -->
        <div class="d-flex justify-content-center">
        <div class="form-check">
        <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault1"
        />
        <img src="img/assets/bni.jpeg" alt="" srcset="" class="form-check-label img-thumbnail h-50 w-50" for="flexRadioDefault1">
        </div>

        <!-- Default checked radio -->
        <div class="form-check">
        <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
            checked
        />
        <img src="img/assets/bri.jpeg" alt="" srcset="" class="img-thumbnail h-50 w-50">
        </div>
        <div class="form-check">
        <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault3"
            checked
        />
        <img src="img/assets/mandiri.jpeg" alt="" srcset=""class="img-thumbnail h-50 w-50">
        </div>
        </div>
        
        <button type="submit" value="Konfirmasi Pesanan" class="btn btn-primary btn-block mb-4">Konfirmasi Pesanan</button>
    </fieldset>

</form>
</h2>
            </div>
        </div>
</section>
<?php include("partial/footer.php")?>