<style>
    body {
        background: #262833;
    }
    .product_upload {
        background: #262833;
        color: #fcfcfc;
        font-size: 18px;
        font-weight: 500;
    }

    .btn_center {
        text-align: center;
    }

    .btn {
        padding: 5px 50px;
        border: none;
        font-weight: 500;        
    }

    .btn.b1 {
        background: green;
    }

    .head{
        font-size: 24px;
    }
    input{
        color:#000;
    }
</style>

<section class="margin_top product_upload">
    <form action="conn.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <h2 class="head">Upload Product Details:</h2>
                </div>
                <div class="col-lg-6">
                    <label for="p_name" class="mb-1">Product Name:</label>
                    <input required id="p_name" class="form-control mb-3" type="text" name="p_name" value="<?php echo (isset($row['product_id']))? $row['product_id']: ''; ?>" placeholder="Product Name">

                    <label for="qty" class="mb-1">Quantity:</label>
                    <input required id="qty" class="form-control mb-3" type="text" name="qty" value="<?php echo (isset($row['quantity']))? $row['quantity']: ''; ?>" placeholder="Quantity">

                    <label for="mrp" class="mb-1">MRP:</label>
                    <input required id="mrp" class="form-control mb-3" type="text" name="mrp" value="<?php echo (isset($row['mrp']))? $row['mrp']: ''; ?>" placeholder="MRP">

                    <label for="price" class="mb-1">Sale Price:</label>
                    <input required id="price" class="form-control mb-3" type="text" name="price" value="<?php echo (isset($row['sale_price']))? $row['sale_price']: ''; ?>" placeholder="Sale Price">

                    <label for="expiry_date" class="mb-1">Expiry Date:</label>
                    <input required id="expiry_date" class="form-control mb-3" type="text" name="expiry_date" value="<?php echo (isset($row['expiry_date']))? $row['expiry_date']: ''; ?>" placeholder="Expiry Date">

                    <label for="company" class="mb-1">Company Name:</label>
                    <input required id="company" class="form-control mb-3" type="text" name="company" value="<?php echo (isset($row['company_name']))? $row['company_name']: ''; ?>" placeholder="Company Name">

                    <label for="" class="mb-1">Return Type:</label>
                    <select class="form-control mb-3" name="category">
                        <?php
                        if (isset($row['return_type'])) {
                            echo '<option hidden selected value="' . $row['return_type'] . '">' . $row['return_type'] . '</option>';
                        }
                        ?>
                            <option selected hidden value="">Select product return type</option>
                        <?php
                        $return = array('No Return', '7 days return', '7 days replacement');

                        foreach ($return as $key => $value) {
                        ?>
                            <option value="<?= $value ?>"><?= $value ?></option>
                        <?php
                        }
                        ?>
                    </select>

                    <label for="p_barcode" class="mb-1">Product Barcode:</label>
                    <input required id="p_barcode" class="form-control mb-3" type="text" name="p_barcode" value="<?php echo (isset($row['product_barcode']))? $row['product_barcode']: ''; ?>" placeholder="Product Barcode">     
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="btn btn-success form-control">Generate Barcode</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn btn-warning form-control">Scan Barcode</div>
                        </div>
                    </div>               
                </div>

                <div class="col-lg-6">
                <label for="" class="mb-1">Description Line 1:</label>
                <?php if (isset($row['description1'])) {
                                echo '<textarea class="form-control mb-3" name="desc1" placeholder="Description Line 1">' . $row['description1'] . '</textarea>';
                        } else {
                                echo '<textarea class="form-control mb-3" name="desc1" placeholder="Description Line 1"></textarea>';
                            }
                ?>

                <label for="" class="mb-1">Description Line 2:</label>
                <?php if (isset($row['description2'])) {
                                echo '<textarea class="form-control mb-3" name="desc2" placeholder="Description Line 2">' . $row['description2'] . '</textarea>';
                        } else {
                                echo '<textarea class="form-control mb-3" name="desc2" placeholder="Description Line 2"></textarea>';
                            }
                ?>

                <label for="" class="mb-1">Description Line 3:</label>
                <?php if (isset($row['description3'])) {
                                echo '<textarea class="form-control mb-3" name="desc3" placeholder="Description Line 3">' . $row['description3'] . '</textarea>';
                        } else {
                                echo '<textarea class="form-control mb-3" name="desc3" placeholder="Description Line 3"></textarea>';
                            }
                ?>

                <label for="" class="mb-1">Featured Product:</label>
                <select class="form-control mb-3" name="featured">
                    <?php
                    if (isset($row['featured'])) {
                        echo '<option hidden selected value="' . $row['featured'] . '">' . $row['featured'] . '</option>';
                    }
                    ?>
                        <option selected hidden value="">Select Yes / No</option>
                    <?php
                    $featured = array('Yes', 'No');

                    foreach ($featured as $key => $value) {
                    ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label for="" class="mb-1">Category:</label>
                <select class="form-control mb-3" name="category">
                    <?php
                    if (isset($row['category'])) {
                        echo '<option hidden selected value="' . $row['category'] . '">' . $row['category'] . '</option>';
                    }
                    ?>
                        <option selected hidden value="">Select Category</option>
                    <?php
                    $category = array('Atta', 'Rice', 'Ghee', 'Sugar', 'Tea', 'Biscuit', 'Namkeen', 'Cold Drinks', 'Cooking Oil', 'Soap', 'Face Wash', 'Shampoo', 'Detergent', 'Dal', 'Dry Fruits', 'Toothpaste', 'Toothbrush', 'Shaving Cream', 'Hair Oil', 'Noodles', 'Pasta', 'Chocolates', 'Sweets & Mithai', 'Cleaning Essentials', 'Repellent & Freshners');

                    sort($category);

                    foreach ($category as $key => $value) {
                    ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label for="stock_qty" class="mb-1">Stock Quantity:</label>
                <input required id="stock_qty" class="form-control mb-3" type="text" name="stock_qty" value="<?php echo (isset($row['stock_quantity']))? $row['stock_quantity']: ''; ?>" placeholder="Stock Quantity">

                <label for="buy_price" class="mb-1">Buying Price:</label>
                <input required id="buy_price" class="form-control mb-3" type="text" name="buy_price" value="<?php echo (isset($row['buy_price']))? $row['buy_price']: ''; ?>" placeholder="Product Name">

                <label for="" class="mb-1">Other Search Names:</label>
                <?php if (isset($row['search_names'])) {
                            echo '<textarea class="form-control mb-3" name="story" placeholder="Other Search Names">' . $row['search_names'] . '</textarea>';
                        } else {
                                echo '<textarea class="form-control mb-3" name="story" placeholder="Other Search Names"></textarea>';
                            }
                ?>
            </div>
        </div>
    </div>
    </form>
</section>