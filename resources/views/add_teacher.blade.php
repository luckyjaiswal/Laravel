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
              <h3 class="box-title">Add Teacher</h3>
              @if(count($errors)>0)
                    <p class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                        </p>
                    @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="teacherAdded" enctype="multipart/form-data">
              <input type="hidden"  name="_token" value="{{ csrf_token() }}" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Profile Picture </label>
                  <input type="file" class="form-control" id="exampleInputEmail1"  name="fileName">
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type ="hidden" value="1" name="role">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm password" name="confirm">
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