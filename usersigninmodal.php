
      <div class="modal-dialog">
        <div class="modal-content" style="background-color:white">
          <div class="modal-header">
          <h1 class="modal-title h1">Signin</h1>
          </div>

          <div class="modal-body">
            <form action="c_signin.php" class="wsignin" style="width: 100%;" method="POST">
              <div class="row">
                <div class="row">
                  <div class="col-md-12">

                    <label for="fname" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="First Name" required>
                    <br>
                  </div>


                  <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <br>

                  </div>

                  <div class="col-md-6">
                    <label for="pwd" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pwd"  placeholder="Password"  required>
                    <br>

                  </div>

                  <div class="col-md-6">
                    <label for="phone" class="form-label">Mobile</label>
                    <input type="phone" class="form-control" name="phone" pattern="[0-9]{10}" placeholder="Enter 10 digit valid number" required>
                    <br>
                  </div>

                  <div class="col-md-6">
                    <label for="birth" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" name="birth" max="2005-01-01" required>
                    <br>
                  </div>
                  
                   <div class="col-md-6">
                   <label for="gender" class="form-label">Gender</label>
                   <select id="gender" name="gender" class="form-control" required>
                   <option>...</option>
                   <option>Male</option>
                   <option>Female</option>
                   <option>Other</option>
                   </select>
                   <br>
                  </div>     

                  <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="1234 Main Station" required>
                    <br>
                  </div>
                
                  <div class="col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" required>
                      <label class="form-check-label" for="gridCheck">
                        Accept Terms and Conditions.
                      </label>
                    </div>
                  </div>

                  <div class="col-12" style="text-align: center; padding-top: 10px;">
                    <button  name="Submit" style="background-color: orangered; border:none" type="submit"
                      class="btn btn-primary" >Sign in</button>
                  </div>

                </div>
              </div>
            </form>

            <div class="modal-footer" style="background-color:#f1f1f1">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>

