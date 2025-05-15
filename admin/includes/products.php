<?php
  $action = !empty($_GET['action']) ? $_GET['action'] : "";
  $product_id = !empty($_GET['product_id']) ? $_GET['product_id'] : 0;

  switch($action) {
    case 'submit':

      if($product_id == 0) {
        $product = ORM::for_table('products')->create();
        
        $product->product_code = trim($_POST['product_code']);
        $product->product_name = trim($_POST['product_name']);
        $product->description = trim($_POST['description']);
        $product->product_price = trim($_POST['product_price']);
        $product->quantity = trim($_POST['quantity']);
        $product->quantity_on_order = trim($_POST['quantity_on_order']);
        $product->save();
        
        #header("Location: ?page=products");
      } else {
        $product = ORM::for_table('products')->find_one($product_id);
        $product->product_code = trim($_POST['product_code']);
        $product->product_name = trim($_POST['product_name']);
        $product->description = trim($_POST['description']);
        $product->product_price = trim($_POST['product_price']);
        $product->quantity = trim($_POST['quantity']);
        $product->quantity_on_order = trim($_POST['quantity_on_order']);
        $product->save();
        #header("Location:?page=products");
      }
      break;
    case 'edit':
      $data = ORM::for_table('products')
      ->table_alias('p')
      ->select('p.*')
      ->findOne($product_id);
      
        break;
    case 'delete':

      $existingData = ORM::for_table('products')->find_one($product_id);
      $existingData->delete();
      
        break;
    default:
      break;
  }
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Products</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="admin/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Products</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="POST" action="?page=products&action=submit&product_id=<?php echo !empty($data['id']) ? $data['id'] : 0; ?>" >
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="product_image" class="form-label">Product Image</label>
                        <input
                          name="product_image"
                          type="file"
                          class="form-control"
                          id="product_image"
                          value="<?php echo isset($data['product_code']) ? $data['product_code'] : "";  ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="product_code" class="form-label">Product Code</label>
                        <input
                          name="product_code"
                          type="text"
                          class="form-control"
                          id="product_code"
                          value="<?php echo isset($data['product_code']) ? $data['product_code'] : "";  ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input
                          name="product_name"
                          type="text"
                          class="form-control"
                          id="product_name"
                          value="<?php echo isset($data['product_name']) ? $data['product_name'] : "";  ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="product_price" class="form-label">Product Price</label>
                        <input
                          name="product_price"
                          type="text"
                          class="form-control"
                          id="product_price"
                          value="<?php echo isset($data['product_price']) ? $data['product_price'] : "";  ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <div class="input-group">
                        <span class="input-group-text">Description</span>
                        <textarea name="description" class="form-control" aria-label="With textarea"><?php echo isset($data['description']) ? $data['description'] : "";  ?></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input
                          name="quantity"
                          type="text"
                          class="form-control"
                          id="quantity"
                          value="<?php echo isset($data['quantity']) ? $data['quantity'] : "";  ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="quantity_on_order" class="form-label">Quantity on Order</label>
                        <input
                          name="quantity_on_order"
                          type="text"
                          class="form-control"
                          id="quantity_on_order"
                          value="<?php echo isset($data['quantity_on_order']) ? $data['quantity_on_order'] : "";  ?>"
                        />
                      </div>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
                <!--end::Input Group-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-10">
                  <div class="card-header"><h3 class="card-title">Products List</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Quantity on order</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      
                      <?php 
                        $results = ORM::for_table('products')
                        ->table_alias('p')
                        ->select('p.*')
                        ->find_many();
                        foreach($results as $index => $values) {
                          ?>
                          <tr class="align-middle">
                          <td><?php echo $values['id']; ?></td>
                          <td><?php echo $values['product_name']; ?></td>
                          <td><?php echo $values['product_price']; ?></td>
                          <td><?php echo $values['quantity']; ?></td>
                          <td><?php echo $values['quantity_on_order']; ?></td>
                          <td>
                            <a href="?page=products&action=edit&product_id=<?php echo $values['id']; ?>"><span class="badge text-bg-info">Edit</span></a> 
                            <a onclick="return confirm('are you sure you want to delete this row ?')" href="?page=products&action=delete&product_id=<?php echo $values['id']; ?>"><span class="badge text-bg-danger">Delete</span></a>
                          </td>
                        </tr>
                        <?php }
                      ?>
                        
                      </tbody>
                    </table>
                  </div>
                
                </div>
              </div>
        <!--end::App Content-->
      </main>