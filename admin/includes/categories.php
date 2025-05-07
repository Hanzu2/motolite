<?php
  $action = !empty($_GET['action']) ? $_GET['action'] : "";
  $category_id = !empty($_GET['category_id']) ? $_GET['category_id'] : 0;
  switch($action) {
    case 'submit':
      if($category_id == 0) {
        $category = ORM::for_table('categories')->create();
      
        $category->category_name = trim($_POST['category_name']);
        $category->description = trim($_POST['description']);

        $category->save();
      } else {
        $category = ORM::for_table('categories')->find_one($category_id);
        $category->category_name = trim($_POST['category_name']);
        $category->description = trim($_POST['description']);
        $category->save();
        header("Location: ?page=categories");
      }
      break;
    case 'edit':
      $data = ORM::for_table('categories')
      ->table_alias('c')
      ->select('c.*')
      ->findOne();
      
        break;
    case 'delete':

      $existingData = ORM::for_table('categories')->find_one($category_id);
      $existingData->delete();
      header("Location: ?page=categories");
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
              <div class="col-sm-6"><h3 class="mb-0">Categories</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="admin/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                  <div class="card-header"><div class="card-title">Categories</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="POST" action="?page=categories&action=submit&category_id=<?php echo !empty($data['id']) ? $data['id'] : 0; ?>" >
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input
                          name="category_name"
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          value="<?php echo isset($data['category_name']) ? $data['category_name'] : "";  ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <div class="input-group">
                        <span class="input-group-text">Description</span>
                        <textarea name="description" class="form-control" aria-label="With textarea"><?php echo isset($data['description']) ? $data['description'] : "";  ?></textarea>
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
              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Category List</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Category Name</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      
                      <?php 
                        $results = ORM::for_table('categories')
                        ->table_alias('c')
                        ->select('c.*')
                        ->find_many();
                        foreach($results as $index => $values) {
                          ?>
                          <tr class="align-middle">
                          <td><?php echo $values['id']; ?></td>
                          <td><?php echo $values['category_name']; ?></td>
                          <td>
                            <a href="?page=categories&action=edit&category_id=<?php echo $values['id']; ?>"><span class="badge text-bg-info">Edit</span></a> 
                            <a href="?page=categories&action=delete&category_id=<?php echo $values['id']; ?>"><span class="badge text-bg-danger">Delete</span></a>
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
        <!--end::App Content-->
      </main>