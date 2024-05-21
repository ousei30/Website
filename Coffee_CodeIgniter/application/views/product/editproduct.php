<div class="container-fluid">
  <div class="container shadow mt-5 bg-warning text-white text-center">
    <?php if(validation_errors()) :?>
    <p><?= validation_errors();?></p>
    <?php endif;?>
  </div>
  <div class="container p-5 shadow mt-4 bg-dark  border border-white">
      <form method="post" action="<?= base_url('product/update')?>">

        <img class="bg-danger" style="height: 200px; width: 200px" src="<?= base_url('image/'. $product->img)?>" alt="">
        <br>
        
        <label for="">Product Image : <span class="text-warning"></span></label>
        <input class="form-control-file" type="file" name="img" id="">
        
        <label for="">Product Name: <span class="text-warning"></span></label>
        <input class="form-control" type="text" name="product_name" value= "<?= $product->product_name; ?>" id="">

        <label for="">Product Description : <span class="text-warning"></span></label>
        <input class="form-control" type="text" name="product_description" value= "<?= $product->product_description; ?>" id="">

        <label for="">Product Name : <span class="text-warning"></span></label>
        <input class="form-control" type="text" name="product_price" value= "<?= $product->product_price; ?>" id="">

        <input type="hidden" name="id"  value= <?= $product->id; ?>>
        <input class="btn btn-success mt-2" type="submit" value="Update Product">
      </form>
  </div>
</div>