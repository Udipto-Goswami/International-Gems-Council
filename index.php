<?php  include "includes/database.php"; ?>
<?php include"includes/header.php";?>
<?php  include "admin/functions.php"; ?>
<?php include"includes/navigation.php";?>

   
    <div class="jumbotron hero jumb_cust">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup"></div>
                    
                    <h1 class="text-right wht">Breadthtaking</h1>
                    <p class="text-right wht" >world of diamonds is awaiting for you.<br><b style="background-color: rgba(239,235,235,0.49); padding-left: 5px;padding-right: 5px">A small step for a greater glamour.</b></p>
                </div>
                <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-md-pull-3 get-it">
                    <h1 class="text-left">Search A Gem</h1>
                    <form id="search-diamond" method="post" action="">
                        <input class="form-control input-lg cty-input" type="text" name="cert_num" placeholder="Product Number">
                        <button class="btn btn-danger btn-lg btn-cst" type="submit" name="search"><strong>Discover Now</strong></button>
                    </form>
                    <p></p>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['search'])) {
            
            if(!empty($_POST['cert_num']))  {

                $cert_num =$_POST['cert_num'];
                $query = "SELECT id FROM jproducts where product_no = '{$cert_num}'";
                $find_product = mysqli_query($connection,$query); 
                while($row = mysqli_fetch_assoc($find_product)) {
                                $id= $row["id"];
                }

                if(!empty($id)) {
                                   header("location:/International Gems Council/admin/product_page.php?id=$id");
 
                }
                else{

                     echo "<p class='bg-danger text-center cust_txt'>No such Record Found!</p>";
                }
            }
        }

        ?>
        

        <?php include"includes/login_modal.php";?>
        <?php include"includes/user-error-modal.php";?>


    </div>
    <div class="container" id="contain-who">
        <h1 class="text-center">Who we are</h1>
        <p class="text-justify cust_who"> International Gems Council (IGC) are leaders in Gems Testing (Like Diamonds, Ruby, Emerald, Yellow Topaz, Aqua Marine, Sapphire, Pearl etc. ) especially in Northern Region. Our Head Office is located in Shree G Mall, Karol Bagh, New Delhi (INDIA). IGC provides its technical services to gems and jewelry Exporters, Retailer Jewelers as well as general public.  A Big Team of Expert Gemologists, Graders, Instructors are there to provide education facilities also. Best part is, all reports have online access.</p>
    </div>
    <div class="container">
        <h1 class="text-center">Education </h1>
        <p class="text-justify cust_who"> Lorem ipsum emmet dolor Lorem ipsum emmet dolor Lorem ipsum emmet dolor Lorem ipsum emmet dolorLorem ipsum emmet dolorLorem ipsum emmet dolorvLorem ipsum emmet dolorLorem ipsum emmet dolorLorem ipsum emmet dolorLorem ipsum emmet dolorLorem ipsum
            emmet dolorLorem ipsum emmet dolorLorem ipsum emmet dolor.</p>
    </div>
    <div class="container ctn">
        <h1 class="text-center">Research &amp; News</h1>
        <div class="vision-plan"><img class="img-rounded img-responsive cust-img" src="assets/img/pic01.jpg"><img class="img-rounded img-responsive cust-img" src="assets/img/pic02.jpg"></div>
    </div>
    <?php include"includes/footer.php";?>
