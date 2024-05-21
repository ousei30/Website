<section class="menu" id="menu" style="background-image: url(<?= base_url('image/wood.jpg')?>); background-size: cover; background-position: center;">

        <br><br><br><br><br><br><br><br>
        <h1 class="heading">our <span>menu</span></h1>
        </section>
<br>

<section class="menu" id="menu" style="background-image: url(<?= base_url('image/wood.jpg')?>); background-size: cover; background-position: center;">
    <h1 class="heading">original <span>series</span></h1>

        <div class="box-container">
            <?php foreach ($product as $products): if($products->series == "Original"){?>
          <div class="box">
            <!-- <img src="../assets\image\iced negra.jpg" alt="" /> -->
            <img class="" style="" src="<?= base_url('image/'. $products->img)?>" alt=""></td>
            <h3><?= $products->product_name?></h3>
            <div class="price"><?= "₱". $products->product_price?></div>
            <div class="price"><?= $products->product_description?></div>
            <a href="<?= base_url('dashboard/cart')?>" class="btn">add to cart</a>
          </div>
          <?php } endforeach; ?>
        </div>


      </section>
<br>
      <section class="menu" id="menu" style="background-image: url(<?= base_url('image/wood.jpg')?>); background-size: cover; background-position: center;">

        <h1 class="heading">hot <span>series</span></h1>


        <?php foreach ($product as $products): if($products->series == "Hot"){?>

        <div class="box-container">
          <div class="box">
            <img class="" style="" src="<?= base_url('image/'. $products->img)?>" alt=""></td>
            <h3><?= $products->product_name?></h3>
            <div class="price"><?= "₱". $products->product_price?></div>
            <div class="price"><?= $products->product_description?></div>
            <a href="#" class="btn">add to cart</a>
          </div>
        </div>

        <?php } endforeach; ?>
      </section>
<br>
<section class="menu" id="menu" style="background-image: url(<?= base_url('image/wood.jpg')?>); background-size: cover; background-position: center;">

        <h1 class="heading">premium <span>series</span></h1>


        <?php foreach ($product as $products): if($products->series == "Premium"){?>

        <div class="box-container">
          <div class="box">
          <img class="" style="" src="<?= base_url('image/'. $products->img)?>" alt=""></td>
            <h3><?= $products->product_name?></h3>
            <div class="price"><?= "₱". $products->product_price?></div>
            <div class="price"><?= $products->product_description?></div>
            <a href="#" class="btn">add to cart</a>
          </div>
        </div>

        <?php } endforeach; ?>

      </section>
<br>
<section class="menu" id="menu" style="background-image: url(<?= base_url('image/wood.jpg')?>); background-size: cover; background-position: center;">

        <h1 class="heading">frappe <span>series</span></h1>


        
        <?php foreach ($product as $products): if($products->series == "Frappe"){?>

        <div class="box-container">
          <div class="box">
          <img class="" style="" src="<?= base_url('image/'. $products->img)?>" alt=""></td>

            <h3><?= $products->product_name?></h3>
            <div class="price"><?= "₱". $products->product_price?></div>
            <div class="price"><?= $products->product_description?></div>
            <a href="#" class="btn">add to cart</a>
          </div>
        </div>

        <?php } endforeach; ?>

      </section>
<br>
<section class="menu" id="menu" style="background-image: url(<?= base_url('image/wood.jpg')?>); background-size: cover; background-position: center;">


    <h1 class="heading">add <span>ons</span></h1>

    
        <?php foreach ($product as $products): if($products->series == "Add-ons"){?>

        <div class="box-container">
          <div class="box">
          <img class="" style="" src="<?= base_url('image/'. $products->img)?>" alt=""></td>

            <h3><?= $products->product_name?></h3>
            <div class="price"><?= "₱". $products->product_price?></div>
            <div class="price"><?= $products->product_description?></div>
            <a href="#" class="btn">add to cart</a>
          </div>
        </div>

        <?php } endforeach; ?>

  </section>
<br>
      <section class="footer">

        <div class="share">
            <label style="font-size: large; color: white;">09426377843</label><br><br>
            <a href="https://www.facebook.com/CoffeeNegra" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/coffee_negra/" class="fab fa-instagram"></a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=CoffeeNegra.ph@gmail.com&su=SUBJECT&body=BODY" class="fab fa-google"></a>
        </div>
  
        <div class="links">
            <a href="index.html">home</a>
            <a href="about.html">about</a>
            <a href="menu.html">menu</a>
            <a href="review.html">review</a>
            <a href="contact.html">contact</a>
        </div>
      </section>

      <script src="js/script.js"></script>

      <div class="container">
    <div class="row">
        <?php foreach ($product as $products): ?>
            <div class="card bg-white" style="width: 18rem;">
                <img class="card-img-top" style="height: 200px" src="<?= base_url('image/'. $products->img)?>" alt=""></td>
                <div class="card-body">
                    <h5 class="card-title text-dark"><?= $products->product_name?></h5>
                    <h5 class="card-title text-dark"><?= $products->product_price?></h5>
                    <p class="card-text text-dark"><?= $products->product_description?></p>
                    <a href="#" class="btn btn-primary">Add To cart</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

      
</body>
</html>