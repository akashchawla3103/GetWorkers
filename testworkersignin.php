<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" type="text/css" href="stylewsignin.css"> -->
    <link rel="stylesheet" type="text/css" href="wsignin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>workersignin</title>
</head>

<body>
    <div class="main">
        <!-- Form -->
        <div>
            <a href="index.php"><img class="logo" src="images/3.png" alt="logo"></a>
        </div>
        <h6 class="display-6">SignIn</h6><br>

        <div class="form-box">
            <form method="post" action="#" class="wsignin" enctype="multipart/form-data">


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Name:</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter Full Name" required>
                            <small id="NameHelp" class="form-text text-muted">Enter Your Full name</small>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">

                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                <small id="EmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">

                                <label for="exampleFormControlTextarea1">Subject:</label>
                                <input name="Subject" class="form-control" id="Subject" required>
                                <small id="SubjectHelp" class="form-text text-muted">Subject</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">

                                <label for="exampleFormControlTextarea1">Message:</label>
                                <textarea class="form-control" name="message" id="Message" rows="4" required></textarea>
                                <small id="MessageHelp" class="form-text text-muted"> Message</small>
                            </div>
                        </div>
                    </div>
                    <br>

                    <button type="submit" name="submit" id="contact_submit" onclick="validate()" class="btn btn-outline-primary btn-lg">Submit</button>
            </form>



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
                nameHelp.className = "error";
                document.getElementById("exampleInputName1").style.border = "Red solid";
            } else {
                nameHelp.innerHTML = " ";

                nameHelp.className = "sucess";
                document.getElementById("exampleInputName1").style.border = "Green solid";
            }

            if (email == "") {
                emailHelp.innerHTML = "Please Enter Email";
                emailHelp.className = "error";
                document.getElementById("exampleInputEmail1").style.border = "Red solid";
            } else {
                // nameHelp.innerHTML = " ";

                emailHelp.className = "sucess";
                document.getElementById("exampleInputEmail1").style.border = "Green solid";
            }


            if (subject == "") {
                subjectHelp.innerHTML = "Please Enter a Subject";
                subjectHelp.className = "error";
                document.getElementById("Subject").style.border = "Red solid";
            } else {
                subjectHelp.className = "sucess";
                document.getElementById("Subject").style.border = "Green solid";
            }

            if (message == "") {
                messageHelp.innerHTML = "Please Enter a  Message";
                messageHelp.className = "error";
                document.getElementById("Message").style.border = "Red solid";
            } else {


                messageHelp.className = "sucess";
                document.getElementById("Message").style.border = "Green solid";
            }

            // if (username == "Formget" && password == "formget#123") {
            //     window.open('target.html')
            // }
        }
    </script>
</body>

</html>