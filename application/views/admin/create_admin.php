<section class="contant">
    <div class="container-fluid">
	<?php alert(); ?>
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1 main">
          
          <div class="panel panel-default">
            <div class="panel-heading">Create Admin User</div>

            <div class="row">
              
              <div class="col-sm-12">
              
                <form role="form" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
				  <div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Select username">
				  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              
              </div>
            
            </div>
            
          </div>

          
        </div>
      </div>
    </div>
</section>