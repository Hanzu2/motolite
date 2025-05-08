<?php

    $product_id = !empty($_GET['product_id']) ? $_GET['product_id'] : 0;


    $products = ORM::for_table('products')
    ->table_alias('p')
    ->select('p.*')
    ->find_one( $product_id );

    // print_r($products); 
?>


<main class="main-container">
    <section class="categories">
        <div class="category-label-box">
            <h2><?php echo $products['product_name']; ?></h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="category-box">
            <?php echo $products['description']; ?>
            <br />
            Price <?php echo $products['product_price']; ?>
            <button type="button" class="btn btn-primary">Add To Cart</button>
        </div>
    </section>
</main>