<section id='content'>
    <div class="bg-white container shadow-lg p-5 mt-5 mb-5 text-dark">
        <div class="container">
            
            <table id="userTable" class="table table-bordered p-4 shadow bg-white text-dark">
                <a class="btn lg btn-success mb-2" href="<?= base_url('product/addproduct') ?>"> Add A New Product</a>
                <h2>Original</h2>
                <thead class="text-center text-dark mt-3">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Options</th> <!-- Fixed typo -->
                    </tr>
                </thead> 
                <tbody class="text-center text-dark">
                    <?php foreach($product as $products):?>
                    <tr>
                        <td>
                            <img style="height: 50px" src="<?= base_url('image/'. $products->img)?>" alt="">
                        </td>
                        <td><?= $products->product_name?></td>
                        <td><?= $products->product_description?></td>
                        <td><?= $products->product_price?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('product/display/' . $products->id); ?>">Edit</a>
                            <a class="btn btn-warning" href="<?= base_url('product/delete/' . $products->id); ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <h2>Hot</h2>
            <table id="userTable" class="table table-bordered p-4 shadow bg-white text-dark">
                <thead class="text-center text-dark mt-3">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Options</th> <!-- Fixed typo -->
                    </tr>
                </thead> 
                <tbody class="text-center text-dark">
                    <?php foreach($product as $products): if($products->series == "Hot"){?>
                    <tr>
                        <td>
                            <img style="height: 50px" src="<?= base_url('image/'. $products->img)?>" alt="">
                        </td>
                        <td><?= $products->product_name?></td>
                        <td><?= $products->product_description?></td>
                        <td><?= $products->product_price?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('product/display/' . $products->id); ?>">Edit</a>
                            <a class="btn btn-warning" href="<?= base_url('product/delete/' . $products->id); ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } endforeach;?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <h2>Premium</h2>
            <table id="userTable" class="table table-bordered p-4 shadow bg-white text-dark">
                <thead class="text-center text-dark mt-3">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Options</th> <!-- Fixed typo -->
                    </tr>
                </thead> 
                <tbody class="text-center text-dark">
                    <?php foreach($product as $products): if($products->series == "Premium"){?>
                    <tr>
                        <td>
                            <img style="height: 50px" src="<?= base_url('image/'. $products->img)?>" alt="">
                        </td>
                        <td><?= $products->product_name?></td>
                        <td><?= $products->product_description?></td>
                        <td><?= $products->product_price?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('product/display/' . $products->id); ?>">Edit</a>
                            <a class="btn btn-warning" href="<?= base_url('product/delete/' . $products->id); ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } endforeach;?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <h2>Frappe</h2>
            <table id="userTable" class="table table-bordered p-4 shadow bg-white text-dark">
                <thead class="text-center text-dark mt-3">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Options</th> <!-- Fixed typo -->
                    </tr>
                </thead> 
                <tbody class="text-center text-dark">
                    <?php foreach($product as $products): if($products->series == "Frappe"){?>
                    <tr>
                        <td>
                            <img style="height: 50px" src="<?= base_url('image/'. $products->img)?>" alt="">
                        </td>
                        <td><?= $products->product_name?></td>
                        <td><?= $products->product_description?></td>
                        <td><?= $products->product_price?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('product/display/' . $products->id); ?>">Edit</a>
                            <a class="btn btn-warning" href="<?= base_url('product/delete/' . $products->id); ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } endforeach;?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <h2>Add-On</h2>
            <table id="userTable" class="table table-bordered p-4 shadow bg-white text-dark">
                <thead class="text-center text-dark mt-3">
                    <tr>
                        <th>Product Image</th>
                        <th>Product Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Options</th> <!-- Fixed typo -->
                    </tr>
                </thead> 
                <tbody class="text-center text-dark">
                    <?php foreach($product as $products): if($products->series == "Add-Ons"){?>
                    <tr>
                        <td>
                            <img style="height: 50px" src="<?= base_url('image/'. $products->img)?>" alt="">
                        </td>
                        <td><?= $products->product_name?></td>
                        <td><?= $products->product_description?></td>
                        <td><?= $products->product_price?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('product/display/' . $products->id); ?>">Edit</a>
                            <a class="btn btn-warning" href="<?= base_url('product/delete/' . $products->id); ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
</section>

<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>
