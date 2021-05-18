<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Item Management Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="" >
              <div class="card-body">
                <div class="form-group">
                  <label for="item_name">Item Name</label>
                  <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit </button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->