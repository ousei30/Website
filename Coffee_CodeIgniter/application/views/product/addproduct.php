<!-- 
emp_num
password
 -->
 <div class="container-fluid">
    <div class="container shadow mt-5 bg-warning text-white text-center">
    <?php
        if(validation_errors()) :?>
        <p><?= validation_errors();?></p>
        <?php endif;?>
    </div>
    <div class="container p-5 shadow mt-4 bg-success  border border-white">
        
        <form method="post" action="<?= base_url('product/addproduct')?>" enctype="multipart/form-data">

            <label for="">Product Image : <span class="text-warning"></span></label>
            <input class="form-control-file" type="file" name="img" id="">

            <label for="">Product Name: <span class="text-warning"></span></label>
            <input class="form-control" type="text" name="product_name" id="">

            <label for="">Product Description : <span class="text-warning"></span></label>
            <input class="form-control" type="text" name="product_description" id="">

            <label for="">Product Price : <span class="text-warning"></span></label>
            <input class="form-control" type="text" name="product_price" id="">

            <label for=""> Series <span class="text-warning"></span></label>
            <select class="form-control" name="series" id="">
                <option value="Original">Original Series</option>
                <option value="Hot">Hot Series</option>
                <option value="Premium">Premium Series</option>
                <option value="Frappe"> Frappe Series</option>
                <option value="Add-Ons"> ADD-ON</option>
            </select>

            <!-- <label for="">Password : <span class="text-warning"></span></label> -->
            <!-- <input class="form-control" type="password" name="pword" id=""> -->

            <input class="btn btn-success mt-2" type="submit" value="Add Product">
        </form>
    </div>

</div>