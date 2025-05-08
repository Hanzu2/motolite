<?php
    $categories = ORM::for_table('categories')
    ->table_alias('c')
    ->select('c.*')
    ->find_many();
?>


<main class="main-container">
    <section class="categories">
        <div class="category-label-box">
            <h2>Category</h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="category-box">
            <ul class="clickable-list">
                <?php foreach($categories as $index => $cat_values) {  ?>
                <li>
                    <a href="#" class="main-category" data-category="engine"><?php echo $cat_values['category_name']; ?></a>
                    <?php

                        $products = ORM::for_table('products_to_categories')
                        ->table_alias('ptc')
                        ->select('ptc.*')
                        ->select('p.id', 'product_id')
                        ->select('p.product_name', 'product_name')
                        ->join('products', array('ptc.product_id', '=', 'p.id'), 'p')
                        ->where('ptc.category_id', $cat_values['id'])
                        ->find_many();
                    ?>
                    <ul class="sub-categories">
                    <?php foreach($products as $index => $prod) {  ?>
                        <li><a href="index.php?page=product-page&product_id=<?php echo $prod['product_id']; ?>" >
                            <?php echo $prod['product_name']; ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>

    <div class="product-section">
        <h1 class="section-title">Products</h1>
        <div class="product-list" id="product-list"></div>
    </div>
</main>