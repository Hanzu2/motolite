<?php

    $product_id = !empty($_GET['product_id']) ? $_GET['product_id'] : 0;

    $action = !empty($_GET['action']) ? $_GET['action'] : "";
    switch ($action){
        case 'add_to_cart':
            $product_id = $_POST['product_id'];
            $product = ORM::for_table('products')->find_one($product_id);
            $quantity = 1;
            $cart = ORM::for_table("cart_master")->create();
            $cart->user_id = $_SESSION["user_id"];
            $cart->date_created = date("Y-m-d");
            $cart->cart_status = "o";
            $cart->total = 0;
            $cart->save();
            $cart_id=$cart->id();


            $cart_detail = ORM::for_table("cart_details")->create();
            $cart_detail->cart_id = $cart_id;
            $cart_detail->product_id = $product_id;
            $cart_detail->quantity=  $quantity;
            $cart_detail->price = $product->product_price * $quantity;
            $cart_detail->save();

            $cart_total = ORM::for_table("cart_details")->where("cart_id", $cart_id)->find_many();
            $details_total= 0;
            
            foreach($cart_total as $total){
                $details_total+=$total->price * $total->quantity;
            }
            $cart_master = ORM::for_table("cart_master")->find_one($cart_id);
            $cart_master->total=$details_total;
            $cart_master->save();

            

        break;
    case 'edit':
    $data = ORM::for_table('products_to_categories')
        ->findOne($data_id);
        break;
    case 'delete':

    $existingData = ORM::for_table('products_to_categories')->find_one($data_id);
    $existingData->delete();
    #header("Location: ?page=categorize-products");
        break;
    default:
    break;
    }
    $products = ORM::for_table('products')
    ->table_alias('p')
    ->select('p.*')
    ->find_one( $product_id );

    // print_r($products); 
?>


<main class="main-container">
<form action="?page=product-page&product_id=<?php echo $product_id; ?>&action=add_to_cart" method="POST">
    <input type="hidden" value="<?php echo $product_id; ?>" name="product_id" />
<section class="categories">
        <div class="category-label-box">
            <h2><?php echo $products['product_name']; ?></h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="category-box">
            <?php echo $products['description']; ?>
            <br />
            Price <?php echo $products['product_price']; ?>
            <button type="submit" class="btn btn-primary">Add To Cart</button>
        </div>
    </section>
</form>
</main>