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
              <h3 class="box-title">Edit Student</h3>
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ URL :: to('stuEdited/'.$detail->id )}}">
              <input type="hidden"  name="_token" value="{{ csrf_token() }}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control"  value="{{ $detail->name }}" id="exampleInputEmail1" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Age</label>
                  <input type="text" class="form-control" value="{{ $detail->age }}"" id="exampleInputPassword1" placeholder="Age" name="age">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control"  value="{{ $detail->email}}" id="exampleInputEmail1" placeholder="Enter name" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control"   value="{{ $detail->name }}" id="exampleInputPassword1" placeholder="Address" name="address">
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