<form action="c_login.php" method="POST">
    <div class="modal fade modal-dialog-centered" id="myModal" role="dialog">



        <div class="modal-dialog">
        <div class="modal-content" style="background-color:white">

          <div class="modal-header">
            <h1 class="modal-title h1">Login</h1>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <label for="c_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="c_email" name="c_email" 
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"placeholder="Email" required>
                <br>
              </div>

              <div class="col-md-12">
                <label for="c_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="c_password"  name="c_password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password"  required>
                
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <button type="submit" class="btn" onclick="validate()" style="background-color: orangered;
            color: white; margin-top:5%;margin-left:32%; margin-bottom:5%; width:35%">Login</button>
          </div>

          <div class="modal-footer"  id="1" style="background-color:#f1f1f3"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </form>
  