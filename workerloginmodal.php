<form action="wlogin.php" method="POST" style="width:55%">

  <div class="modal fade modal-dialog-centered" data-backdrop="static" id="wModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:white">
        <div class="errorclass">

        </div>
        <div class="modal-header">
          <h1 class="modal-title h1">Login</h1>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <label for="w_email" class="form-label">Email</label>
              <input type="email" class="form-control" id="w_email" name="w_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" required>
              <small id="emailhelp" style="visibility: hidden; color:red">Please Enter Email</small>
              <br>
            </div>

            <div class="col-md-12">
              <label for="c_password" class="form-label">Password</label>
              <input type="password" class="form-control" id="w_password" name="w_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
              <small id="emailhelp" style="visibility: hidden; color:red">Please Enter Password</small>

            </div>
          </div>
        </div>

        <div class="col-md-12">
          <button type="submit" id="login" class="btn" onclick="validate()" style="background-color: orangered; 
            color: white; margin-top:5%;margin-left:32%; margin-bottom:5%; width:35%">Login</button>
        </div>


        <!-- <button type="submit" name="submit" id="contact_submit" onclick="validate()" class="btn btn-outline-primary btn-lg">Submit</button> -->

        <div class="modal-footer" style="background-color:#f1f1f1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</form>

<!-- <script>
var password = document.getElementById("w_password").value;
    // let emailhelp = document.getElementById("emailhelp");
  var passwordhelp = document.getElementById("passwordhelp");

  function validate() {
    // // var email = document.getElementById("w_email").value;
    // // console.log(email);
    // // let username = document.getElementById("w_email").value;
    
    //         // if (email== "") {
    //         //     emailhelp.innerHTML = "Please Enter Userame";
    //         //     emailhelp.style.color = "red";
    //         //     document.getElementById("w_email").style.border = "Red solid";
    //         // }
          

    //         if (password== " " ) {
    //           password.innerHTML = "Please Enter Userame";
    //           passwordhelp.style.visiblity="visible";
    //           passwordhelp.style.color = "red";

    //             document.getElementById("w_password").style.border = "Red solid";
    //         }
            
    //     }
    // document.getElementById("login").style.color=;
  } -->

</script>