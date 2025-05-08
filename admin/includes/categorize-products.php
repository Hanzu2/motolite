<?php
  $action = !empty($_GET['action']) ? $_GET['action'] : "";
  $data_id = !empty($_GET['data_id']) ? $_GET['data_id'] : 0;
  
  switch($action) {
    case 'submit':
      if($data_id == 0) {
        $data = ORM::for_table('products_to_categories')->create();
        print_r($_POST);
        $data->product_id = trim($_POST['product_id']);
        $data->category_id = trim($_POST['category_id']);

        $data->save();
        header("Location: ?page=categorize-products");
      } else {
        $data = ORM::for_table('products_to_categories')->find_one($$data_id);
        $data->product_id = trim($_POST['product_id']);
        $data->category_id = trim($_POST['category_id']);
        $data->save();
        header("Location: ?page=categorize-products");
      }
      break;
    case 'edit':
      $data = ORM::for_table('products_to_categories')
        ->findOne($data_id);
        break;
    case 'delete':

      $existingData = ORM::for_table('products_to_categories')->find_one($data_id);
      $existingData->delete();
      header("Location: ?page=categorize-products");
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
              <div class="col-sm-6"><h3 class="mb-0">Categorize Products</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="admin/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categorize Products</li>
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
                  <div class="card-header"><div class="card-title">Categorize Products</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="POST" action="?page=categorize-products&action=submit&data_id=<?php echo !empty($data['id']) ? $data['id'] : 0; ?>" >
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category</label>
                        <select class="form-select form-control-border" id="exampleSelectBorder" name="category_id">
                        <option value="" >Please select category</option>
                        <?php 
                        $results = ORM::for_table('categories')
                        ->table_alias('c')
                        ->select('c.*')
                        ->find_many();
                        foreach($results as $index => $values) {
                          ?>
                          <option value="<?php echo $values['id']; ?>" ><?php echo $values['category_name']; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product</label>
                        <select class="form-select form-control-border" id="exampleSelectBorder" name="product_id">
                        <option value="" >Please select product</option>
                        <?php 
                        $results = ORM::for_table('products')
                        ->table_alias('p')
                        ->select('p.*')
                        ->find_many();
                        foreach($results as $index => $values) {
                          ?>
                          <option value="<?php echo $values['id']; ?>" ><?php echo $values['product_code'] . " - " . $values['product_name']; ?></option>
                        <?php } ?>
                        </select>
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
          <!--end::Container--><br />
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
                          <th>Category</th>
                          <th>Product</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      
                      <?php 

                        $results = ORM::for_table('products_to_categories')
                        ->join('products', array('products.id', '=', 'products_to_categories.product_id'))
                        ->join('categories', array('categories.id', '=', 'products_to_categories.category_id'))
                        ->find_many();
                        foreach($results as $index => $values) {
                          ?>
                          <tr class="align-middle">
                          <td><?php echo $values['id']; ?></td>
                          <td><?php echo $values['category_name']; ?></td>
                          <td><?php echo $values['product_name']; ?></td>
                          <td>
                            <a href="?page=categorize-products&action=edit&data_id=<?php echo $values['id']; ?>"><span class="badge text-bg-info">Edit</span></a> 
                            <a onclick="return confirm('are you sure you want to delete this row ?')" href="?page=categorize-products&action=delete&data_id=<?php echo $values['id']; ?>"><span class="badge text-bg-danger">Delete</span></a>
                          </td>
                        </tr>
                        <?php }
                      ?>
                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>
        <!--begin::Container-->
      </main>