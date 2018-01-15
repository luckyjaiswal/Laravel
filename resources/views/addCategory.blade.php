@include('include.header')
@include('include.sidebar')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="categoryAdd" enctype="multipart/form-data">
              <input type="hidden"  name="_token" value="{{ csrf_token() }}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Category Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1"  name="fileName">
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Category Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Age" name="age">
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
</div>
</section>
@include('include.footer')