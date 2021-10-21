<div class="container-fluid update-form">
    <!-- general form elements -->
    <div id="update-form" class="card">
      <div class="card-header">
        <div class="title"><h3 class="card-title sm" style="font-size: 20px;"><b>Update User<b></h3></div>
        <div class="close right" style="cursor: pointer;"><span><i class="fas fa-times"></i></span></div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="frm-update" action="{{ url('admin/update-user') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control username" placeholder="Enter Username">
                  </div>
                  <div class="err_username text-danger"></div>
              </div>
             
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="name" class="form-control name" placeholder="Enter Full Name">
                </div>
                <div class="err_fullName text-danger"></div>
              </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control email" placeholder="Enter email">
          </div>
          <div class="err_email text-danger"></div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control password" placeholder="Enter Password">
          </div>
          <div class="err_pass text-danger"></div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="confirm" class="form-control conf" placeholder="Enter Password">
          </div>
          <div class="err_conf text-danger"></div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <div class="row">
                <div class="col-sm-6"><button id="create-user" type="submit" class="btn btn-primary">Update</button></div>
                <div class="col-sm-6 text-right"><button type="reset" class="btn btn-secondary">Cencer</button></div>
            </div>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
