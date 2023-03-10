<div class="row" style="margin-top: 10%; background-color:aliceblue">

    <div class="jumbotron" style="background-color:aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="display-1">About Us</h1>
                    <p class="lead">Welcome to Getworkers, your number one source for workers. We're dedicated to providing you the very best of service,
                        with an emphasis on Electricians,Carpenters,Plumbers,<br>Cleaners,Garderners and Masons.</p>
                    <hr class="my-4">
                    <p>Founded in 2021 by Mr.Akash Chawla, Getworkers has come a long way from its beginnings in Ichalkaranji.<br><br>
                        When Akash Chawla first started out, his passion for <strong><i>"Help at your Doorstep"</i></strong> them to start their own business.</p>
                    <p><strong> Hope you enjoy our services as much as we enjoy offering them to you. If you have any questions or comments,
                            please don't hesitate to contact us.</strong></p>

                    <p class="lead">
                        <button class="btn btn-outline-primary btn-lg" id="mybtn" role="button">Contact Us</button>
                    </p>
                </div>
                <div class="col-sm-6">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        if (isset($_SESSION['customer']) && $_SESSION['customer'] == true) { ?>
                            <form id=" lead myform" action="contactus.php" method="POST" style="width: 100%;" id="myform">
                                <h1 class="display-1">Contact Us</h1>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name:</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter Full Name" required>
                                    <small id="NameHelp" class="form-text text-muted">Enter Your Full name</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="EmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Subject:</label>
                                    <input name="Subject" class="form-control" id="Subject" required>
                                    <small id="SubjectHelp" class="form-text text-muted">Subject</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message:</label>
                                    <textarea class="form-control" name="message" id="Message" rows="4" required></textarea>
                                    <small id="MessageHelp" class="form-text text-muted"> Message</small>
                                </div><br>

                                <button type="submit" name="submit" id="contact_submit" onclick="validate()" class="btn btn-outline-primary btn-lg">Submit</button>
                            </form>

                    <?php }
                    else{
                        echo' <img class="lead" id="aboutus_image" src="images/about us.png" alt="" width="130%">';
                    }

                    }  else{
                        echo' <img class="lead" id="aboutus_image" src="images/about us.png" alt="" width="130%">';
                    }
                    ?>

                    <!-- </div> -->
                </div>
            </div>


        </div>
    </div>

    <script>
        // function showform() {
        //     let image = document.getElementById("aboutus_image");
        //     let form = document.getElementById("lead myform");
        //     image.style.display = "none";
        //     form.style.display="block";
        //     form.style.visibility="visible";

        // }
        // var attempt = 3; // Variable to count number of attempts.
        // // Below function Executes on click of login button.
        function validate() {
            var name = document.getElementById("exampleInputName1").value;
            var email = document.getElementById("exampleInputEmail1").value;
            var nameHelp = document.getElementById("NameHelp");
            var emailHelp = document.getElementById("EmailHelp");
            var subject = document.getElementById("Subject").value;
            var subjectHelp = document.getElementById("SubjectHelp");
            var message = document.getElementById("Message").value;
            var messageHelp = document.getElementById("MessageHelp");

            if (name == "") {
                nameHelp.innerHTML = "Please Enter Name";
                nameHelp.className="error";
                document.getElementById("exampleInputName1").style.border = "Red solid";
            } else {
                nameHelp.innerHTML = " ";

                nameHelp.className="sucess";
                document.getElementById("exampleInputName1").style.border = "Green solid";
            }

            if (email == "") {
                emailHelp.innerHTML = "Please Enter Email";
                emailHelp.className="error";
                document.getElementById("exampleInputEmail1").style.border = "Red solid";
            } else {
                // nameHelp.innerHTML = " ";

                emailHelp.className="sucess";
                document.getElementById("exampleInputEmail1").style.border = "Green solid";
            }


            if (subject == "") {
                subjectHelp.innerHTML = "Please Enter a Subject";
                subjectHelp.className="error";
                document.getElementById("Subject").style.border = "Red solid";
            } else {
                subjectHelp.className="sucess";
                document.getElementById("Subject").style.border = "Green solid";
            }

            if (message == "") {
                messageHelp.innerHTML = "Please Enter a  Message";
                messageHelp.className="error";
                document.getElementById("Message").style.border = "Red solid";
            } else {
                

                messageHelp.className="sucess";
                document.getElementById("Message").style.border = "Green solid";
            }

            // if (username == "Formget" && password == "formget#123") {
            //     window.open('target.html')
            // }
        }
    </script>