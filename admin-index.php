<?php 
include("partial/header.php");
include("admin-menu.php");
include("env.php")?>
<div class="container">
    <div class="align-middle" style="padding-top: 150px;">
    <div class="wrapper text-center">
        <h1 class="py-3">Dashboard</h1>
            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col p-4">

            <?php 
            //Sql Query 
            $sql = "SELECT * FROM tbl_category";
                //Execute Query
                $res = mysqli_query($con, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>

            <h1><?php echo $count; ?></h1>
            Kategori
            </div>

        <div class="col p-4">

            <?php 
                //Sql Query 
                $sql2 = "SELECT * FROM tbl_food";
                //Execute Query
                $res2 = mysqli_query($con, $sql2);
                    //Count Rows
                $count2 = mysqli_num_rows($res2);
            ?>

            <h1><?php echo $count2; ?></h1>
            Produk
            </div>

        <div class="col p-4">
                
            <?php 
                //Sql Query 
                $sql3 = "SELECT * FROM tbl_order";
                //Execute Query
                $res3 = mysqli_query($con, $sql3);
                //Count Rows
                $count3 = mysqli_num_rows($res3);
            ?>

            <h1><?php echo $count3; ?></h1>
            Jumlah Pesanan
            </div>

        <div class="col p-4">

            <?php 
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Ordered'";

                //Execute the Query
                $res4 = mysqli_query($con, $sql4);

                //Get the VAlue
                $row4 = mysqli_fetch_assoc($res4);
                    
                    //GEt the Total REvenue
                $total_revenue = $row4['Total'];

            ?>

            <h1>Rp.<?php echo $total_revenue; ?></h1>
            Keuntungan
            </div>

            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php include('partial/footer.php') ?>