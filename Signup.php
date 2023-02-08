<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <!-- link css -->
    <link rel="stylesheet" href="resources/css/signup.css" />
    <link rel="icon" href="./resources/images/ic-logo.svg" />
  </head>
  <body>
    <div class="SignUp-container">
      <div class="mask">
        <form
          action="Signup.php"
          method="post"
          class="signup-form"
          style="height: auto; padding-bottom: 60px"
        >
          <div class="">
            <div class="row">
              <div class="">
                <h1>Registration</h1>
                <br />
                <label for="firstname"><b>First Name:</b></label
                ><br />
                <input
                  class=""
                  id="firstname"
                  type="text"
                  name="firstname"
                  placeholder="John"
                  required
                /><br />

                <label for="lastname"><b>Last Name:</b></label
                ><br />
                <input
                  class=""
                  id="lastname"
                  type="text"
                  name="lastname"
                  placeholder="Doe"
                  required
                /><br />

                <label for="email"><b>Email:</b></label
                ><br />
                <input
                  class=""
                  id="email"
                  type="email"
                  name="email"
                  placeholder="JohnDoe@email.com"
                  required
                /><br />

                <label for="phonenumber"><b>Phone Number:</b></label
                ><br />
                <input
                  class=""
                  id="phonenumber"
                  type="number"
                  name="phonenumber"
                  placeholder="111 111-1111"
                  required
                /><br />

                <label for="password"><b>Password:</b></label
                ><br />
                <input
                  class=""
                  id="password"
                  type="password"
                  name="password"
                  placeholder="*********"
                  required
                /><br />
                <input
                  class="button"
                  type="submit"
                  name="create"
                  id="register"
                  value="Sign Up"
                /><br />
                <div class="navigation-links" style="flex-direction: column">
                  <a href="Login.html" class="signup-link"
                    >Already registered? Login here!</a
                  ><br />
                  <a href="index.html" class="go-back">Go Back</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php
      if (isset($_POST['create'])) {
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phonenumber = $_POST['phonenumber'];
          $password = $_POST['password'];

          // Create connection
          $conn = mysqli_connect("localhost", "root", "", "Colmar-Registry2.0");

          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // sql to create table
          $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";

          if (mysqli_query($conn, $sql)) {
              echo "<script>alert('Registration Successful!')</script>";  // alert message for successful registration. 

              echo "<script>window.open('Login.html','_self')</script>";  // redirecting to login page after successful registration. 

              } else {  // alert message for unsuccessful registration. 

              echo "<script>alert('Registration Unsuccessful!')</script>";  

              }  

          mysqli_close($conn);   // closing the connection with database. 
      }   
    ?>
  </body>
</html>
